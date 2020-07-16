import React from 'react'

const ProductInCart = ({sku, product, productDetails, removeFromCart}) => {
  const {quantity, color} = product
  const {content, price, title} = productDetails

  return (
    <div className="acf-mini-cart-product">
      <div className="acf-mini-cart-product__image">
        <img src={content.productImages[0].imageUrl} alt={title} />
      </div>
      <div className="acf-mini-cart-product__price">
        {price.price.toFixed(2)}
      </div>
      <div className="acf-mini-cart-product__title">
        {title}
      </div>
      <div className="acf-mini-cart-product-variant">
        <span className="acf-mini-cart-product-variant__qty">QTY: {quantity}</span>
        <span className="acf-mini-cart-product-variant__separator">|</span>
        <span className="acf-mini-cart-product-variant__color">Color: {color}</span>
        <span className="acf-mini-cart-product-variant__separator">|</span>
        <span className="acf-mini-cart-product-variant__size">Color: {color}</span>
      </div>
      <span className="acf-mini-cart-product__remove" title={'Remove'}
            onClick={() => removeFromCart(sku, quantity, price)}>X</span>
    </div>
  )
}

export default ProductInCart
