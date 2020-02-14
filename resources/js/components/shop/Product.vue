<template>
    <section class="product-shop spad pt-2">
        <div class="container">
            <div class="blog-detail-title m-3">
                <h2 class="text-center text-warning">เมนูซาลาเปาของเรา</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6" v-for="(product, key) in products" :key="key">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img
                                            :src="`store/img/products/${product.product_img}`"
                                            alt=""
                                        />
                                        <div class="icon" @click="addProductToCart(product)">
                                        <i class="icon_plus_alt"></i>
                                            </div>
                                        <ul>
                                           <li class="quick-view p-3" @click="addProductToCart(product)">
                                                <span>+ เพิ่มในตะกร้า</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">ซาลาเปา</div>
                                        <a href="#">
                                            <h5>{{ product.product_name }}</h5>
                                        </a>
                                            <div class="product-price">฿{{ product.product_price}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapGetters, mapActions } from "vuex";

export default {
    methods: {
        ...mapActions(["addProductToCart"])
    },
    computed: {
        ...mapGetters(["products"])
    }
};
</script>

<style></style>
