import { types } from 'acf/constants'

export const getProduct = productCode => ({
  type: types.GET_PRODUCT,
  payload: {
    client: 'kibo',
    request: {
      url: `product`,
      method: 'post',
      data: { 
        type: 'get',
        id: productCode
       }
    }
  }}
)
