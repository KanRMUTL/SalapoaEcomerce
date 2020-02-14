<template>
  <div>
    <Header menuSelected="que"/>
        <QueTable />
        <QueSelected/>
    <Footer />
  </div>
</template>

<script>
import Header from "../components/layouts/Header";
import Footer from "../components/layouts/Footer";
import QueTable from '../components/que/QueTable';
import QueSelected from '../components/que/QueSelected';

export default {
  components: {
    Header,
    Footer,
    QueTable,
    QueSelected
  },
};
</script>

<style>
</style>
