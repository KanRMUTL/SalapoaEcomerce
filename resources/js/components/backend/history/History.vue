<template>
    <div>
        <Title :title="title" />
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">รายการประวัติการขาย</h3>
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
                            <th class="text-center">ชื่อ - สกุล</th>
                            <th class="text-center">จำนวนรายการ</th>
                            <th class="text-center">ราคาทั้งหมด</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">วันที่สั่งซื้อ</th>
                            <th class="text-center">หลักฐานการชำระเงิน</th>
                            <th class="text-center">เพิ่มเติม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(que, key) in todayQue" :key="key">
                            <td class="text-center">{{ que.order_que }}</td>
                            <td>{{ que.customer_name }}</td>
                            <td class="text-center">{{ que.order_amount }}</td>
                            <td class="text-right">{{ que.order_total }}</td>
                            <td :class="status[que.status_id].class + ' font-weight-bold text-center'">
                                {{ status[que.status_id].title }}
                            </td>
                            <td class="text-center">
                                {{ que.dateformated }}
                            </td>
                            <td class="text-center">
                                <button
                                     @click="setQueSelected(que)"
                                    class="btn btn-info btn-sm"
                                    data-toggle="modal"
                                    data-target="#slipModal"
                                >
                                    <i class="fa fa-eye"></i>
                                </button>
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
        <QueModal :showForm="false" />
        <SlipModal />
    </div>
</template>

<script>
import Title from "../Title";
import QueModal from "../que/QueModal";
import SlipModal from "../que/SlipModal";
import { mapActions, mapGetters } from "vuex";

export default {
    components: {
        Title,
        QueModal,
        SlipModal
    },
    mounted() {
        this.getOrders();
    },
    data() {
        return {
            title: "ประวัติการขาย"
        };
    },
    methods: {
        ...mapActions(["getOrders", "setQueSelected"])
    },
    computed: {
        ...mapGetters(["todayQue", "status"])
    }
};
</script>

<style></style>
