export default {
    state: {
        cart: JSON.parse(localStorage.getItem('cart')),
        total: Number(localStorage.getItem('total'))
    },
    getters: {
        cart (state) {
            return state.cart
        },
        total (state) {
            return state.total
        }
    },
    mutations: {
        ADD_PRODUCT_TO_CART (state, product) {
            let filter = state.cart.filter(item => item.product_id == product.product_id);
            console.log(filter);
            if(filter.length > 0){
                console.log('มีอยู่แล้ว')
                let index = state.cart.findIndex(cartItem => cartItem.product_id == product.product_id)
                state.cart[index].sub_order_amount++
                state.cart[index].sub_order_total = product.product_price * state.cart[index].sub_order_amount
            } else {
                console.log('ยังไม่มี')
                state.cart.push({
                    product_id: product.product_id,
                    product_name: product.product_name,
                    product_img: product.product_img,
                    product_price: product.product_price,
                    sub_order_amount: 1,
                    sub_order_total: product.product_price
                })
            }
            state.total += Number(product.product_price)
            localStorage.setItem('cart', JSON.stringify(state.cart))
            localStorage.setItem('total', state.total)
        }
    },
    actions: {
        addProductToCart ({commit}, product) {
            commit("ADD_PRODUCT_TO_CART", product)
        }
    }
}
