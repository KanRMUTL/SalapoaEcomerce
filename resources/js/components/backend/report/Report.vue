<template>
<div class="row">
    <Title title="ข้อมูลการขายสินค้า" />
    <div class="col-12 col-sm-6 col-md-4" v-for="(product, key) in productReport" :key="key">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"
               style="width:100px " >
                <img :src="'/store/img/products/' + product.product_img" />
                </span>

            <div class="info-box-content">
                <span class="info-box-text">ขายได้ {{ productTotal(product.amount) }} ชิ้น</span>
                <span class="info-box-number">
                    ราคารวม {{ productTotal(product.total) }} บาท
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    </div>
</template>

<script>
import {mapGetters, mapActiions, mapActions} from 'vuex'
import Title from '../Title'

export default {
    components: {
        Title
    },
    mounted() {
        this.getReport()
    },
    methods: {
        ...mapActions(['getReport']),
        productTotal (val) {
            return val ? val : 0
        }
    },
    computed: {
        ...mapGetters(['productReport'])
    }
};
</script>

<style></style>
