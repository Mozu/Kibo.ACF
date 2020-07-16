import { types } from 'acf/constants'

export const getCurrentCart = () => ({
  type: types.GET_CURRENT_CART,
  payload: {
    client: 'kibo',
    request: {
      url: `cart`,
      method: 'post',
      data: { 
        type: 'get'
       }
    }
  }
})

export const updateCart = (catItem) => ({
  type: types.UPDATE_CART,
  payload: {
    client: 'kibo',
    request: {
      url: `cart`,
      method: 'post',
      data: { 
        type: 'update',
        data: catItem
       }
    }
  }
})

export const deleteCart = (catItem) => ({
  type: types.DELETE_CART,
  payload: {
    client: 'kibo',
    request: {
      url: `cart`,
      method: 'post',
      data: { 
        type: 'delete',
        data: catItem
       }
    }
  }
})
