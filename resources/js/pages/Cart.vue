<template>
  <div>
    <Header menuSelected="cart"/>
    <CartTable />
    <Footer />
  </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import CartTable from "../components/cart/CartTable";

export default {
  components: {
    Header,
    Footer,
    CartTable
  },
};
</script>

<style>
</style>
