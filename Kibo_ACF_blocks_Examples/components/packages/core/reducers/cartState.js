import { types } from 'acf/constants'

export const initialState = {
  cartItems: {},
  count: 0,
  totalPrice: 0
}

export default (state = initialState, {type, payload = {}}) => {
  let cartItems = state.cartItems
  let {total = 0, items = {}, quantity = 0, product} = payload.data || {};

  //{
  //   "product": {
  //     "productCode":"TOP16",
  //     "variationProductCode":"TOP16-2",
  //     "options":[{"attributeFQN":"tenant~color","name":"Color","value":"White"},{"attributeFQN":"tenant~size","name":"Size","value":"M"}]
  //   },
  //   "quantity":1,
  //   "fulfillmentMethod":"Ship"
  // }

  switch (type) {
    case types.GET_CURRENT_CART_SUCCESS:
      return {
        ...state,
        cartItems: items.reduce((obj, item) => {
          obj[item['product']['variationProductCode'] || item['product']['productCode']] = item
          return obj
        }, {}),
        count: items.length,
        totalPrice: total
      }
    case types.ADD_CART_ITEM_SUCCESS:
      return {
        ...state,
        cartItems: {
          ...cartItems,
          [product.variationProductCode || product.productCode]: payload.data
        },
        count: state.count + quantity,
        totalPrice: state.totalPrice + total
      }
    default:
      return state
  }
}
