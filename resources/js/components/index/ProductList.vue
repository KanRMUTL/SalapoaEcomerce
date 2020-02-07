<template>
  <section class="women-banner spad pt-4 pb-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="product-large set-bg" data-setbg="store/img/food/05.jpg">
            <h2>ซาลาเปา</h2>
            <a href="#">หลากหลายไส้ให้คุณเลือก</a>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-1 pt-5" id="products">
          <div class="product-slider owl-carousel">
            <div v-for="(product, key) in products" :key="key" v-show="products" class="product-item">
              <div class="pi-pic">
                <img :src="`store/img/products/${product.product_img}`" alt />
                <div class="icon">
                  <i class="icon_plus_alt"></i>
                </div>
                <ul>
                  <li class="quick-view">
                    <a href="#products" v-on:click="addProductToCart(product)">+ เพิ่มในตะกร้า</a>
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
  </section>
</template>

<script>
import { mapGetters } from "vuex";
export default {
    methods: {
        addProductToCart(product) {
            
        }
    },
  computed: {
      ...mapGetters(['products'])
  }
};
</script>

<style>
</style>
