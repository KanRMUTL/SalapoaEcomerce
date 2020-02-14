<template>
  <div>
    <Header menuSelected="que"/>
        <QueTable />
    <Footer />
  </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import QueTable from '../components/que/QueTable';

export default {
  components: {
    Header,
    Footer,
    QueTable
  },
};
</script>

<style>
</style>
