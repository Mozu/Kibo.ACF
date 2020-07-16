import { types } from 'acf/constants'

export const initialState = {
  productList: {}
}

export default (state = initialState, {type, payload = {}}) => {
  switch (type) {
    case types.GET_PRODUCT_SUCCESS:
      let {productCode} = payload.data

      return {
        ...state,
        productList: {
          ...state.productList,
          [productCode]: payload.data
        }
      }

    default:
      return state
  }
}
