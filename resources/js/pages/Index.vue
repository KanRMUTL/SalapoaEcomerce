<template>
  <div>
    <Header menuSelected="home"/>
    <banner />
    <product-list />
    <Footer />
  </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import Banner from "../components/index/Banner";
import ProductList from "../components/index/ProductList";

export default {
  components: {
    Header,
    Footer,
    Banner,
    ProductList
  },
};
</script>

<style>
</style>
