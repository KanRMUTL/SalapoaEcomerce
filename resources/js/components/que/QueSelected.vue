<template>
    <div
        v-if="orderSelected"
        class="modal fade"
        id="modal-queselected"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modal-queselected-title"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4 class="text-info mb-2">
                        รหัสบัตรคิว: {{ orderSelected.order.order_code }}
                    </h4>
                    <h1 class="text-success mb-2">
                        คิวที่ {{ orderSelected.order.order_que }}
                    </h1>
                    <h4 class="mb-2">รายละเอียดการสั่งซื้อ</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <OrderList :orders="orderSelected.order.sub_order" :shippingPrice="haveShippingPrice"/>
                        </div>
                    </div>
                     <h3 class="text-warning mb-3">
                        จำนวนคิวรอ {{ orderSelected.waitingQue }} คิว
                    </h3>
                    <p class="mb-1 text-left">
                        สั่งซื้อโดย: คุณ{{ orderSelected.order.customer_name }}
                    </p>
                    <p class="mb-1 text-left">เบอร์โทร: {{ orderSelected.order.customer_phone }}</p>
                    <p class="mb-1 text-left">ออกบัตรคิวเมื่อ {{ orderSelected.created }}</p>
                    <p class="mb-1 text-left">สถานะ: <b :class="status[orderSelected.order.status_id].class">{{ status[orderSelected.order.status_id].title }}</b></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import OrderList from "./OrderList";

export default {
    components: {
        OrderList
    },
    computed: {
        ...mapGetters(["orderSelected", 'status']),
        haveShippingPrice(){
                return this.orderSelected.order.order_shipping_price > 0;
        }
    }
};
</script>

<style></style>
