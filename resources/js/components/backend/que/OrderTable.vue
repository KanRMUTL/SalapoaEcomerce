<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>สินค้า</th>
                                <th class="text-right">ราคา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(order, key) in orders" :key="key">
                                <td>
                                    {{ order.product.product_name }}
                                    <span class="badge badge-primary p-1">{{ order.sub_order_amount }} ชิ้น</span>
                                </td>
                                <td class="text-right">
                                    {{ order.sub_order_price }}
                                </td>
                            </tr>
                            <tr v-if="shippingPrice > 0">
                                <td >
                                    ค่าบริการจัดส่ง
                                </td>
                                <td class="text-right">
                                    15.00
                                </td>
                            </tr>
                            <tr class="text-primary">
                                <td>
                                    <b>ราคารวม</b>
                                </td>
                                <td class="text-right">
                                    <b>{{ total }}</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</template>

<script>
export default {
    props: {
        orders: {
            type: Array,
            required: true
        },
        total: {
            required: true
        },
        shippingPrice: {
            required: true
        },
    }
};
</script>

<style></style>
