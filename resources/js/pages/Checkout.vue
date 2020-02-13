<template>
  <div>
    <Header menuSelected="checkout"/>
    <BillingDetail />
    <Footer />
  </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import BillingDetail from "../components/checkout/BillingDetail";

export default {
  components: {
    Header,
    Footer,
    BillingDetail
  },
};
</script>

<style>
</style>
