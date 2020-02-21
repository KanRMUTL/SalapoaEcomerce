<template>
  <div
        class="modal fade"
        id="queModal"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
        v-if="queSelected"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">คุณ{{ queSelected.customer_name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="h4 text-info text-center mb-2">
                        รหัสบัตรคิว : {{ queSelected.order_code }}
                    </h4>
                    <h1 class="h1 text-success text-center mb-3">
                        คิวที่ {{ queSelected.order_que }}
                    </h1>
                    <hr>
                    <h4 class="text-center mb-2">รายการสั่งซื้อ</h4>
                    <OrderTable :orders="queSelected.sub_order" :total="queSelected.order_total" />
                    <hr>
                    <p>เบอร์โทร : {{ queSelected.customer_phone }}</p>
                    <p>สั่งซื้อเมื่อ : {{ queSelected.dateformated }}</p>
                    <p>สถานะ : <b :class="status[queSelected.status_id].class">{{ status[queSelected.status_id].title }}</b></p>
                    <StatusForm v-if="showForm" :status="status" :statusId="queSelected.status_id" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import OrderTable from './OrderTable'
import StatusForm from './StatusForm'

export default {
    props: {
        showForm:{
            type: Boolean,
            default: true
        }
    },
    components: {
        OrderTable,
        StatusForm
    },
    computed: {
        ...mapGetters(['queSelected', 'status'])
    }
}
</script>

<style>

</style>
