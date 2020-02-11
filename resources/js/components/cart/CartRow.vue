<template>
    <tr>
        <td class="cart-pic p-4">
            <img :src="`store/img/products/${product.product_img}`" alt="" />
        </td>
        <td class="cart-title">
            <h5>ซาลาเปา{{ product.product_name}}</h5>
        </td>
        <td class="p-price">฿{{ product.product_price}}</td>
        <td>
            <button type="button" class="btn btn-warning text-white mb-1 mr-1" @click="declineProduct(product.product_id)">-</button>
            {{product.sub_order_amount}}
            <button type="button" class="btn btn-warning text-white mb-1 ml-1" @click="addProductToCart(product)">+</button>
        </td>
        <td class="total-price">฿{{ product.sub_order_total}}</td>
        <td class="close-td"><i class="ti-close" @click="deleteProduct(product.product_id)"></i></td>
    </tr>
</template>

<script>
import {mapActions} from 'vuex'

export default {
    props: {
        product: {
            type: Object,
            required: true
        }
    },
    methods: {
        ...mapActions({
            deleteProduct: 'deleteProductFromCart',
            addProductToCart: 'addProductToCart',
            declineProduct: 'declineProductFromCart'
        })
    }

};
</script>
