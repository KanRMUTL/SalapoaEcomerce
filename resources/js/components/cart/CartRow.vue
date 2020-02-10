<template>
    <tr>
        <td class="cart-pic p-4">
            <img :src="`store/img/products/${product.product_img}`" alt="" />
        </td>
        <td class="cart-title">
            <h5>ซาลาเปา{{ product.product_name}}</h5>
        </td>
        <td class="p-price">฿{{ product.product_price}}</td>
        <td class="qua-col">
            <div class="quantity">
                <div class="pro-qty">
                    <input type="number" :value="product.sub_order_amount" />
                </div>
            </div>
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
            deleteProduct: 'deleteProductFromCart'
        })
    }

};
</script>
