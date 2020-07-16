import { combineReducers } from 'redux'
import cartState from './cartState'
import productState from './productState'
import kiboAuthToken from './customer'

export default combineReducers({
  cartState,
  productState,
  kiboAuthToken
})
