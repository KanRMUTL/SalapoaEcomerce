<template>
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>รูปสินค้า</th>
                                    <th class="p-name">ชื่อสินค้า</th>
                                    <th>ราคา/ชิ้น</th>
                                    <th>จำนวน</th>
                                    <th>ราคารวม</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <CartRow
                                    v-for="(cartItem, key) in cart"
                                    :key="key"
                                    :product="cartItem"
                                    v-show="cart.length > 0"
                                />
                                <tr v-if="!cart || cart.length == 0">
                                    <td colspan="6">
                                        ไม่มีสินค้าในตะกร้าของคุณ
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <!-- <li class="subtotal">
                                        ยอดรวมทั้งหมด <span>฿240.00</span>
                                    </li> -->
                                    <li class="cart-total">
                                        ยอดรวมทั้งหมด <span>{{ total }} บาท</span>
                                    </li>
                                </ul>
                                <a href="/checkout" class="primary-btn checkout-btn w-100 text-center">ดำเนินการชำระเงิน</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
</template>

<script>
import CartRow from './CartRow'
import {mapGetters} from 'vuex'

export default {
    mounted(){
        console.log(this.cart)
    },
    components:{
        CartRow
    },
    computed: {
        ...mapGetters(['cart', 'total'])
    }
}
</script>

<style></style>
