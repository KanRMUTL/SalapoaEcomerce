<template>
    <div class="checkout-form mb-2">
        <div class="place-order">
            <div class="order-total">
                <ul class="order-table mb-0">
                    <li class="text-left">ชื่อสินค้า <span>ราคา</span></li>
                    <li
                        v-for="(order, key) in orders"
                        :key="key"
                        class="fw-normal text-left align-middle"
                    >
                        ซาลาเปา{{ order.product.product_name }} x
                        {{ order.sub_order_amount }}
                        <span>{{ order.sub_order_price }}</span>
                    </li>
                    <li
                        v-if="shippingPrice"
                        class="fw-normal text-left align-middle"
                    >
                        ค่าบริการในการจัดส่ง
                        <span>15.00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        orders: {
            type: Array
        },
        shippingPrice:{
            type: Boolean,
            required: true
        }
    }
};
</script>

<style></style>
