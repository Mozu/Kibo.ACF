import { types } from 'acf/constants'

export const createAnonAuthTicket = () => ({
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
})
