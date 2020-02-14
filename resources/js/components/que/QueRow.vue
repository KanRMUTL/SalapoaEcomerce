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
          <button class="btn btn-primary">
              <i class="fa fa-search"></i>
          </button>
      </td>
  </tr>
</template>

<script>
import { mapGetters } from 'vuex'

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
    computed: {
        ...mapGetters(['status'])
    }
}
</script>

<style>

</style>
