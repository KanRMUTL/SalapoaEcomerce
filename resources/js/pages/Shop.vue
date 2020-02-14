<template>
    <div>
        
        <Header menuSelected="shop" />
        <Product />
        <Footer />
    </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import Product from "../components/shop/Product";

export default {
    components: {
        Header,
        Product,
        Footer
    }
};
</script>

<style></style>
