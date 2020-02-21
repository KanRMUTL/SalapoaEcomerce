<template>
    <div>
        <div class="form-group form-inline">
            <label>อัพเดทสถานะ</label>
            <select class="form-control ml-2" v-model="statusSelected" @change="upDateStatus">
                <option v-for="(item, key) in status" :key="key" :value="key">
                    {{ item.title }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex'

export default {
    props: {
        statusId: {
            type: Number,
            required: true
        }
    },
    data () {
        return {
            statusSelected: this.statusId
        }
    },
    methods: {
        ...mapActions(['getOrderToday', 'updateStatusOrder']),
        upDateStatus() {
           this.updateStatusOrder(this.statusSelected)
        }
    },
    computed: {
        ...mapGetters(['status', 'queSelected'])
    }
};
</script>

<style></style>
