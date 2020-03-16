<template>
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>คิวที่</th>
                                    <th>รหัสบัตรคิว</th>
                                    <th>จำนวนคิวที่ต้องรอ</th>
                                    <th>จำนวนรายการ</th>
                                    <th>ราคาทั้งหมด</th>
                                    <th>สถานะ</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <QueRow
                                    v-for="(list, key) in orderList"
                                    :key="key"
                                    :waitingQue="list.waitingQue"
                                    :order="list.order"
                                    :created="list.created"
                                />
                                
                                <tr v-if="orderList.length == 0">
                                    <td colspan="7">
                                        ไม่มีรายการบัตรคิว
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import QueRow from './QueRow'

export default {
    components: {
        QueRow
    },
    mounted () {
        this.setOrderList()
    },
    methods: {
        ...mapActions(['setOrderList'])
    },
    computed: {
        ...mapGetters(['orderList'])
    }
}
</script>

<style>

</style>
