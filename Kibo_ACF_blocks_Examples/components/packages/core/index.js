import React from 'react'
import { createStore, applyMiddleware } from 'redux'
import thunkMiddleware from 'redux-thunk'
import { composeWithDevTools } from 'redux-devtools-extension'
import { Provider } from 'react-redux'
import axios from 'axios'
import { multiClientMiddleware } from 'redux-axios-middleware'
import { ACF_PATH_DRUPAL_API, ACF_STORE_NAME, KIBO_PATH_DRUPAL_API, types} from './constants'
import { saveState, loadState } from './utils/persistStore'
import rootReducer from './reducers'
import { createAnonAuthTicket } from './actions/customer'

const apiClients = {
  default: {
    client: axios.create({
      baseURL: ACF_PATH_DRUPAL_API,
      responseType: 'json',
      transformResponse: [function (data) {
        // Do whatever you want to transform the data
        if(data[0]) {
          return data[0];
        }
        return data;
      }],
    })
  },
  kibo: {
    client: axios.create({
      baseURL:KIBO_PATH_DRUPAL_API,
      responseType: 'json',
      headers: { 'Content-Type': 'application/json; charset=utf-8', Accept: 'application/json' },
      transformRequest: [function (data, headers) {
        const crsfToken = loadState('XCSRFToken');
        const kiboAuthToken = window[ACF_STORE_NAME].getState().kiboAuthToken;

        if(crsfToken) {
          headers['X-CSRF-Token'] = crsfToken;
        }

        if(kiboAuthToken) {
          data['kiboAuthToken'] = kiboAuthToken;
        }

        return JSON.stringify(data);
      }],
      transformResponse: [function (data) {
        // Do whatever you want to transform the data
        if(typeof data === 'string') {
          var parsedData = JSON.parse(data);
          console.log(parsedData)
          return parsedData;
        }
        console.log('No Parse')
        return data;
      }],
    })
  }
}


const createKiboAnonAuthTicket = () => {
  const kiboTokenState = window[ACF_STORE_NAME].getState().kiboAuthToken;
  if(Object.keys(kiboTokenState).length === 0 && kiboTokenState.constructor === Object) {
      window[ACF_STORE_NAME].dispatch({
        type: types.CREATE_ANON_AUTH_TICKET,
        payload: {
          client: 'kibo',
          request: {
            url: `customer`,
            method: 'post',
            data: { 
              type: 'createAnonAuthTicket'
             }
          }
        }
      });
  }
}


const getXCSRFToken = () => {
  return axios.get(window.location.origin + '/rest/session/token');
}

const initCreateStore = (initialState = {}) => {
  return createStore(
    rootReducer,
    initialState,
    composeWithDevTools(
      applyMiddleware(
        multiClientMiddleware(apiClients, {
          onError: (middleware, client, action) => {
            if(middleware.error.response.data.message == "X-CSRF-Token request header is missing") {

              getXCSRFToken().then((response) =>{
                saveState('XCSRFToken', response.data);
                middleware.dispatch(middleware.action)  
              });
              
            }
            console.log(middleware)
            console.log(client)
            console.log(action)
          }
        }),
        thunkMiddleware
      )
    )
  )
}

if (!window[ACF_STORE_NAME]) {
  const persistedState = loadState(ACF_STORE_NAME)
  window[ACF_STORE_NAME] = initCreateStore(persistedState)

  window[ACF_STORE_NAME].subscribe(() => {
    saveState(ACF_STORE_NAME, window[ACF_STORE_NAME].getState())
  })
}

createKiboAnonAuthTicket();

const settings = drupalSettings.acf_blocks !== undefined && drupalSettings.acf_blocks.product !== undefined
  ? {
      sku: drupalSettings.acf_blocks.product.sku,
      id: drupalSettings.acf_blocks.product.id
    }
  : null

export const withAcfStore = Component => (
  <Provider store={window[ACF_STORE_NAME]}>
    <Component settings={settings}/>
  </Provider>
)

export default withAcfStore
