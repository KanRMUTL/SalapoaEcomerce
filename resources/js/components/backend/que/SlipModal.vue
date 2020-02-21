<template>
  <div
        class="modal fade"
        id="slipModal"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
        v-if="queSelected"
    >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                   <img :src="`/storage/images/${queSelected.order_slip}`" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
   computed: {
        ...mapGetters(["queSelected"])
    }
}
</script>

<style>

</style>
