<template>
    <div class="cart-hover">
        <div class="select-items">
            <table>
                <tbody>
                    <tr v-for="(cartItem, key) in cart" :key="key">
                        <td class="si-pic" style="width:25%">
                            <img
                                :src="`store/img/products/${cartItem.product_img}`"
                            />
                        </td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p>
                                    ฿{{ cartItem.product_price }} x
                                    {{ cartItem.sub_order_amount }}
                                </p>
                                <h6>ซาลาเปา{{ cartItem.product_name }}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i
                                class="ti-close"
                                @click="deleteProduct(cartItem.product_id)"
                            ></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>รวม:</span>
            <h5>฿{{ total }}</h5>
        </div>
        <div class="select-button">
            <a href="/cart" class="primary-btn view-card">ไปที่ตะกร้า</a>
            <a href="/checkout" class="primary-btn checkout-btn">ชำระเงิน</a>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
    methods: {
        ...mapActions({ deleteProduct: "deleteProductFromCart" })
    },
    computed: {
        ...mapGetters(["cart", "total"])
    }
};
</script>

<style></style>
