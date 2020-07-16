import { types } from 'acf/constants'

export const getCartItem = () => ({
  type: types.GET_CART_ITEM,
  payload: {
    client: 'kibo',
    request: {
      url: `cart/item`,
      method: 'post',
      data: { 
        type: 'get'
       }
    }
  }
})

export const addCartItem = (catItem) => ({
  type: types.ADD_CART_ITEM,
  payload: {
    client: 'kibo',
    request: {
      url: `cart/item`,
      method: 'post',
      data: { 
        type: 'add',
        data: catItem
       }
    }
  }
})

export const updateCartItem = (catItem) => ({
  type: types.UPDATE_CART_ITEM,
  payload: {
    client: 'kibo',
    request: {
      url: `cart/item`,
      method: 'post',
      data: { 
        type: 'update',
        data: catItem
       }
    }
  }
})

export const removeCartItem = (catItemId) => ({
  type: types.REMOVE_CART_ITEM,
  payload: {
    client: 'kibo',
    request: {
      url: `cart/item`,
      method: 'post',
      data: { 
        type: 'remove',
        data: {'id': catItemId }
       }
    }
  }
})
