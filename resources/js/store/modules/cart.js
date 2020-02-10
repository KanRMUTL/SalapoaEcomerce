import swall from 'sweetalert'
export default {
    state: {
        cart: JSON.parse(localStorage.getItem('cart')),
        total: Number(localStorage.getItem('total')),
        amount: Number(localStorage.getItem('amount'))
    },
    getters: {
        cart(state) {
            return state.cart
        },
        total(state) {
            return state.total
        },
        amount(state) {
            return state.amount
        }
    },
    mutations: {
        ADD_PRODUCT_TO_CART(state, product) {
            let productInCart
            let hasProduct = false
            if (state.cart != null) {
                productInCart = state.cart.forEach(function (item) {
                    if (item.product_id == product.product_id) {
                        hasProduct = true
                        return
                    }
                });
                if (hasProduct) {
                    console.log('มีอยู่แล้ว')
                    let index = state.cart.findIndex(cartItem => cartItem.product_id == product.product_id)
                    state.cart[index].sub_order_amount++
                    state.cart[index].sub_order_total = product.product_price * state.cart[index].sub_order_amount
                }
            } else {
                state.cart = []
            }

            if (state.cart == null || !hasProduct) {
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

            swal({
                title: "เพิ่มสินค้าเรียบร้อย",
                text: "เราได้เพิ่มสินค้าลงตะกร้าเรียบร้อย",
                icon: "success",
            });
        },
        DELETE_PRODUCT_FROM_CART(state, productId) {
            let index = state.cart.findIndex(cartItem => cartItem.product_id == productId)
            state.cart.splice(index, 1)

        },

        DECLINE_PRODUCT_FROM_CART(state, productId) {

        },

        UPDATE_CART(state) {
            let total = 0
            state.cart.forEach(item => {
                total += Number(item.sub_order_total)
            })
            state.total = total
            state.amount = state.cart.length
            localStorage.setItem('cart', JSON.stringify(state.cart))
            localStorage.setItem('total', state.total)
            localStorage.setItem('amount', state.amount)
        }
    },
    actions: {
        addProductToCart({
            commit
        }, product) {
            commit("ADD_PRODUCT_TO_CART", product)
            commit("UPDATE_CART")
        },
        deleteProductFromCart({
            commit
        }, productId) {
            swal({
                    title: "คุณต้องการลบรายการดังกล่าวหรือไม่?",
                    text: "คุณต้องการลบรายการสินค้าดังกล่าวออกจากตะกร้าสินค้าหรือไม่",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        commit("DELETE_PRODUCT_FROM_CART", productId)
                        commit("UPDATE_CART")
                        swal("ลบรายการสินค้าดังกล่าวเรียบร้อย", {
                            icon: "success",
                        });
                    }
                });

        }
    }
}
