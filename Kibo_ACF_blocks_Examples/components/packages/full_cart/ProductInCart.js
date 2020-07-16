import React from 'react'
import FormSelect from 'acf/utils/FormSelect'

const ProductInCart = ({sku, product, productDetails, updateInCart, removeFromCart}) => {
  const {color, size, quantity, id} = product
  const {imageUrl, price, title, options, name} = product.product
  const subTotal = quantity * price.price

const getOption = (fqn) => {
    const option = options.find(o => o['attributeFQN'] === fqn);
    return (option) ? option.value : "";
  }

  return (
    <div className="acf-product-card">
      <div className="acf-product-card__inner">
        <div className="acf-product-card__image">
          <img src={imageUrl} alt={name}/>
        </div>
        <div className="acf-product-card__content">
          <div className="acf-product-card__price">{price.price.toFixed(2)}</div>
          <h2 className="acf-product-card__title">{name}</h2>

          <ul className="acf-product-card__variants-list">
            <Variant label={'Color'}>{getOption('tenant~color')}</Variant>

            <Variant label={'Size'}>{getOption('tenant~size')}</Variant>

            <Variant label={'Qty'}>
              <FormSelect value={quantity}
                          options={[...Array(10).keys()].map(n => ++n)}
                          onChange={evt => updateInCart(sku, +evt.target.value, price.price)}/>
            </Variant>
          </ul>

          <div className="acf-product-card__subtotal">
            <span className="acf-product-card__subtotal-label">Sub-Total:</span>
            <span>{subTotal.toFixed(2)}</span>
          </div>

          <input className="acf-product-card__remove" title={'Remove'}
                 type='button' onClick={() => removeFromCart(id)}/>
        </div>
      </div>
    </div>
  )
}

function Variant ({label, children}) {
  return (
    <li>
      <label className="acf-product-card__variant">
        <b className="acf-product-card__variant-label">{label}</b>
        <div className="acf-product-card__variant-options">
          {children}
        </div>
      </label>
    </li>
  )
}

export default ProductInCart
