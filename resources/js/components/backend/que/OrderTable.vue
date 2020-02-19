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
                                <th class="text-center">จำนวน</th>
                                <th class="text-right">ราคา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(order, key) in orders" :key="key">
                                <td>
                                    {{ order.product.product_name }}
                                </td>
                                <td class="text-center">
                                    {{ order.sub_order_amount }}
                                </td>
                                <td class="text-right">
                                    {{ order.sub_order_price }}
                                </td>
                            </tr>
                            <tr class="text-primary">
                                <td colspan="2">
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
            type: Object,
            required: true
        },
        total: {
            type: Number,
            required: true
        }
    }
};
</script>

<style></style>
