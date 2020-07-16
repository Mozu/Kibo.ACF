import { types } from 'acf/constants'

export const initialState = {}

export default (state = initialState, {type, payload = {}}) => {
  let authToken = payload.data || {};
  switch (type) {
    case types.CREATE_ANON_AUTH_TICKET_SUCCESS:
      return {
        ...state,
        ...authToken
      }

    default:
      return state
  }
}
