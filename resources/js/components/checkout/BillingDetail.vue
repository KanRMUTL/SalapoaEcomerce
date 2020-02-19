<template>
      <!-- Shopping Cart Section Begin -->
    <section class="mt-3">
        <div class="container">
            <form action="#" class="checkout-form" @submit="formSubmit" v-if="!paymented">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="mb-2">รายละเอียด</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">ชื่อ</label>
                                <input type="text" id="fir" v-model="form.firstname">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">นามสกุล</label>
                                <input type="text" id="last" v-model="form.lastname">
                            </div>
                            <div class="col-lg-12">
                                <label for="phone">เบอร์โทรศัพท์</label>
                                <input type="text" id="phone" v-model="form.phone">
                            </div>
                            <div class="col-lg-12">
                                <label for="remark">หมายเหตุ(ถ้ามี)</label>
                                <input type="text" id="remark" v-model="form.remark">
                            </div>
                        </div>
                        <h4 class="mb-2">การชำระเงิน</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="/store/img/payment.jpg" alt="Prompay" class="img-fluid text-center">
                                <label for="">1.กรุณาโอนเงินเข้าบัญชีพร้อมเพย์ของทางร้านเป็น<b class="text-success">จำนวนเงิน {{ total }} บาท</b></label>
                                <label for="">2.เมื่อโอนเสร็จแล้วกรุณาอัพโหลดสลิปการโอนเงินเพื่อใช้เป็น<b class="text-success">หลักฐานยืนยันการชำระเงิน</b></label>
                            </div>
                            <div class="col-lg-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="slip" ref="slip" id="slip" @change="handleFileUpload">
                                    <label class="custom-file-label" for="slip">อัพโหลดหลักฐานการโอนเงิน(สลิป)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="col-lg-6">
                            <div class="place-order">
                                <h4 class="mb-2">คำสั่งซื้อของคุณ</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>ชื่อสินค้า <span>ราคา</span></li>
                                        <li
                                            v-for="(cartItem, key) in cart"
                                            :key="key"
                                            class="fw-normal"
                                        >
                                            ซาลาเปา{{ cartItem.product_name }} x {{ cartItem.sub_order_amount }} <span>{{ cartItem.sub_order_total }} บาท</span>
                                        </li>
                                        <li class="total-price">รวมทั้งหมด <span>{{ total }} บาท</span></li>
                                    </ul>
                                    <div class="order-btn select-button">
                                        <button type="submit" class="btn primary-btn checkout-btn" :disabled="!total">ยืนยันการชำระเงิน</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import axios from 'axios'
import swal from 'sweetalert'

export default {
    data() {
        return {
            form: {
                firstname: '',
                lastname: '',
                phone: '',
                remark: '',
                slipFile: ''
            },
            paymented: false,
        }
    },
    methods: {
        ...mapActions(['pushOrder', 'updateOrder']),
        handleFileUpload () {
            this.form.slipFile = this.$refs.slip.files[0]
        },
        checkForm () {
            let condition = this.form.firstname == '' || this.form.lastname == '' || this.form.phone == '' || this.form.slipFile == '';
            if(condition){ // ป้อนข้อมูลไม่ครบ
                swal({
                    title: 'กรุณาป้อนข้อมูลให้ครบถ้วน',
                    icon: 'warning'
                })
            }
            return !condition;
        },
        switchPaymentStatus() {
            this.paymented = !this.paymented
        },
        formSubmit (e) {
            e.preventDefault();

            if(!this.checkForm()) { // ป้อนข้อมูลไม่ครบ
                return
            }
            let formData = new FormData();
            formData.append('slip', this.form.slipFile);
            formData.append('firstname', this.form.firstname);
            formData.append('lastname', this.form.lastname);
            formData.append('phone', this.form.phone);
            formData.append('remark', this.form.remark);
            formData.append('cart', JSON.stringify(this.cart))
            formData.append('amount', this.amount)
            formData.append('total', this.total)
            axios.post('/createOrder',
                formData,
                {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            ).then( function(res) {
                let order_id = res.data.order_id
                let order = JSON.parse(localStorage.getItem('order'))
                if(order == null){
                    order = []
                }
                order.push(order_id)
                localStorage.setItem('order', JSON.stringify(order))
                swal({
                    title: 'บันทึกการสั่งซื้อของคุณเรียบร้อย',
                    icon: 'success'
                })
                localStorage.removeItem('cart')
                localStorage.removeItem('amount')
                localStorage.removeItem('total')
                setTimeout(() => {
                    window.location = '/que'
                }, 3000)
            }).catch(function(error){
                console.log(error)
                swal({
                    title: 'เกิดข้อผิดพลาดในการสั่งซื้อ',
                    text: 'กรุณาตรวจสอบข้อมูลก่อนยืนยันการสั่งซื้อ',
                    icon: 'error'
                })
            })
        }
    },
     computed: {
        ...mapGetters(['cart','total', 'amount', 'order'])
    }
}

</script>

<style>

</style>
