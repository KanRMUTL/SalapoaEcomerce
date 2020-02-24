<template>
    <div>
        <Title :title="title" />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">รายการคิววันนี้</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table
                    id="datatable"
                    class="table table-bordered table-striped"
                >
                    <thead>
                        <tr>
                            <th class="text-center">ลำดับคิว</th>
                            <th class="text-center">รหัสบัตรคิว</th>
                            <th class="text-center">ชื่อ - สกุล</th>
                            <th class="text-center">จำนวนรายการ</th>
                            <th class="text-center">ราคาทั้งหมด</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">ช่องทางการรับสินค้า</th>
                            <th class="text-center">การชำระเงิน</th>
                            <th class="text-center">เพิ่มเติม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(que, key) in todayQue" :key="key">
                            <td class="text-center">{{ que.order_que }}</td>
                            <td class="text-center">{{ que.order_code }}</td>
                            <td>{{ que.customer_name }}</td>
                            <td class="text-center">{{ que.order_amount }}</td>
                            <td class="text-right">{{ que.order_total }}</td>
                            <td :class="status[que.status_id].class + ' font-weight-bold text-center'">
                                {{ status[que.status_id].title }}
                            </td>
                            <td :class="shippingType[que.order_shipping_type].class + ' font-weight-bold text-center'">
                                {{ shippingType[que.order_shipping_type].title }}
                            </td>
                            <td class="text-center">
                                <button
                                     @click="setQueSelected(que)"
                                    class="btn btn-info btn-sm"
                                    data-toggle="modal"
                                    data-target="#slipModal"
                                    v-if="que.order_slip"
                                >
                                    พร้อมเพย์ <i class="fa fa-qrcode"></i>
                                </button>
                                <b class="text-success" v-else>ชำระเงินปลายทาง</b>
                            </td>
                            <td class="text-center">
                                <button
                                    @click="setQueSelected(que)"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#queModal"
                                >
                                    <i class="fa fa-search"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <QueModal />
        <SlipModal />
    </div>
</template>

<script>
import Title from "../Title";
import QueModal from "./QueModal";
import SlipModal from "./SlipModal";
import { mapActions, mapGetters } from "vuex";

export default {
    components: {
        Title,
        QueModal,
        SlipModal
    },
    mounted() {
        this.getOrderToday();
    },
    data() {
        return {
            title: "คิววันนี้"
        };
    },
    methods: {
        ...mapActions(["getOrderToday", "setQueSelected"])
    },
    computed: {
        ...mapGetters(["todayQue", "status", "shippingType"])
    }
};
</script>

<style></style>
