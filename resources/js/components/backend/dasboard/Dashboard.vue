<template>
    <section class="content">
        <Title :title="title" />
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p>รายการสั่งซื้อวันนี้</p>
                            <h3>{{ order.orderToday }} รายการ</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <router-link to="/admin/que" class="small-box-footer"
                            >เพิ่มเติม <i class="fas fa-arrow-circle-right"></i
                        ></router-link>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <p>ยอดขายวันนี้</p>
                            <h3>{{ price(order.orderTotalToday) }} บาท</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <router-link to="/admin/que" class="small-box-footer"
                            >เพิ่มเติม <i class="fas fa-arrow-circle-right"></i
                        ></router-link>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>รายการสั่งซื้อทั้งหมด</p>
                            <h3>{{ order.orderRow }} รายการ</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <router-link to="/admin/history" class="small-box-footer"
                            >เพิ่มเติม <i class="fas fa-arrow-circle-right"></i
                        ></router-link>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <p>ยอดขายทั้งหมด</p>
                            <h3>{{ price(order.orderTotal) }} บาท</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <router-link to="/admin/product" class="small-box-footer"
                            >เพิ่มเติม <i class="fas fa-arrow-circle-right"></i
                        ></router-link>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</template>

<script>
import Title from '../Title'
import axios from 'axios'

export default {
    components: {
        Title
    },
    async mounted() {
        let res = await axios.get('/dashboard')
        this.order = res.data
    },
    data() {
        return{
            title: 'แดชบอร์ด',
            order: ''
        }
    },
    methods: {
        price(value){
            return value ? value : 0
        }
    }
};
</script>

<style></style>
