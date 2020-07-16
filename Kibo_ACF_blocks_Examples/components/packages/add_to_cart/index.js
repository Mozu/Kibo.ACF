import React from 'react'
import ReactDOM from 'react-dom'
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux'
import { withAcfStore } from 'acf'
import { ACF_ID_ADD_TO_CART } from 'acf/constants'
import { addCartItem, getProduct, getCurrentCart } from 'acf/actions'
import FormSelect from 'acf/utils/FormSelect'

class AddToCart extends React.Component {
  constructor (props) {
    super(props)

    this.state = {
      id: props.settings.id,
      sku: props.settings.sku,
      color: null,
      size: null,
      qty: null
    }
  }

  componentDidMount () {
    console.log('Product Mount' + this.state.sku);
    this.props.getProduct(this.state.sku)
  }

  shouldComponentUpdate (nextProps) {
    return !!nextProps.productList[this.state.sku]
  }

  selectVariantHandler = (key, value) => {
    this.setState({
      [key]: value
    })
  }

   //{
  //   "product": {
  //     "productCode":"TOP16",
  //     "variationProductCode":"TOP16-2",
  //     "options":[{"attributeFQN":"tenant~color","name":"Color","value":"White"},{"attributeFQN":"tenant~size","name":"Size","value":"M"}]
  //   },
  //   "quantity":1,
  //   "fulfillmentMethod":"Ship"
  // }

  getOptions = (options = [], fqn) => {
    const option = options.find(i => i.attributeFQN === fqn);

    if(option) {
      const values = option.values.map( v => v.value);
      this.state['default_' + option.attributeDetail.name.toLowerCase()] = values[0];
      return values;
    }
    return [];
  }

  findVariationCode = (variations, color, size) => {
    if(!variations) {
      return null;
    }
    const foundVariation = variations.find(variation => {
      return variation.options.every(o => {
        switch (o.attributeFQN) {
          case 'tenant~size':
            return o.value === size;
          case 'tenant~color':
            return o.value === color;
          default:
            return false;
        }
      });
  });
  return foundVariation ? foundVariation.productCode : null;
}

  addToCartHandler = () => {
    let {sku, color, size, qty} = this.state
    let {colors, sizes, inventory, price, productCode, variationProductCode, fulfillmentMethod, variations} = this.props.productList[this.state.sku]

    const colorValue = color || this.state.default_color;
    const sizeValue = size || this.state.default_size;

    this.props.addCartItem({
      "product": {
        "productCode": productCode,
        "variationProductCode": this.findVariationCode(variations, colorValue, sizeValue),
        "options": [
            {"attributeFQN":"tenant~color","name":"Color","value":colorValue},
            {"attributeFQN":"tenant~size","name":"Size","value": sizeValue}
        ]
      },
      "quantity": qty || 1,
      "fulfillmentMethod": fulfillmentMethod || "Ship"
    })
  }

  render () {
    if (!this.props.productList[this.state.sku]) {
      return null
    }

    let {variations, options} = this.props.productList[this.state.sku]

    const color = this.getOptions(options, 'tenant~color');
    const size = this.getOptions(options, 'tenant~size');
    const isNotDisabled = this.findVariationCode(variations, this.state.color || this.state.default_color, this.state.size || this.state.default_size);

    return (
      <div className="acf-add-to-cart">
        <div className="acf-add-to-cart__inner">
          <ul className="acf-add-to-cart__variants-list">
            <Variant label={'Color'}>
              <FormSelect onChange={evt => this.selectVariantHandler('color', evt.target.value)}
                          options={color}/>
            </Variant>

            <Variant label={'Size'}>
              <FormSelect onChange={evt => this.selectVariantHandler('size', evt.target.value)}
                          options={size}/>
            </Variant>

            <Variant label={'Qty'}>
              <FormSelect onChange={evt => this.selectVariantHandler('qty', +evt.target.value)}
                          options={[...Array(10).keys()].map(n => ++n)}/>
            </Variant>
          </ul>

          <button className="acf-add-to-cart__button" type='button'
                  onClick={this.addToCartHandler} disabled={isNotDisabled ? false : true} >
            <i className="acf-add-to-cart__icon"/>
            <span className="acf-add-to-cart__label">{'Add to cart'}</span>
          </button>

          {!isNotDisabled &&
            <span>
              Product Configuration not available
            </span>
          }

        </div>
      </div>
    )
  }
}

function Variant ({label, children}) {
  return (
    <li>
      <label className="acf-add-to-cart__variant">
        <b className="acf-add-to-cart__variant-label">{label}</b>
        <div className="acf-add-to-cart__variant-options">
          {children}
        </div>
      </label>
    </li>
  )
}

function mapStateToProps ({productState}) {
  return {...productState}
}

function mapDispatchToProps (dispatch) {
  return bindActionCreators(
    {addCartItem, getProduct},
    dispatch
  )
}

const AddToCartWithStore = connect(mapStateToProps, mapDispatchToProps)(AddToCart)

ReactDOM.render(
  withAcfStore(AddToCartWithStore),
  document.getElementById(ACF_ID_ADD_TO_CART)
)
