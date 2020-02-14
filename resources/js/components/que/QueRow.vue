<template>
    <tr>
        <td>
            <b>{{ order.order_que }}</b>
        </td>
        <td>
            {{ order.order_code }}
        </td>
        <td>
            {{ waitingQue }}
        </td>
        <td>
            {{ order.order_amount }}
        </td>
        <td>
            {{ order.order_total }}
        </td>
        <td :class="status[order.status_id].class">
            {{ status[order.status_id].title }}
        </td>
        <td>
            <button
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#modal-queselected"
                @click="setOrderModal()"
            >
                <i class="fa fa-search"></i>
            </button>
        </td>
    </tr>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
    props: {
        waitingQue: {
            type: Number,
            required: true
        },
        created: {
            type: String,
            required: true
        },
        order: {
            type: Object,
            required: true
        }
    },
    methods: {
        ...mapActions(["setOrderSelected"]),
        setOrderModal(){
            this.setOrderSelected({
                order: this.order,
                created: this.created,
                waitingQue: this.waitingQue
            })
        }
    },
    computed: {
        ...mapGetters(["status"])
    }
};
</script>

