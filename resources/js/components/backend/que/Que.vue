<template>
  <Title :title="title" />
</template>

<script>
import Title from '../Title'

export default {
    components: {
        Title
    },
    data() {
        return{
            title: 'คิววันนี้'
        }
    }
};
</script>

<style>

</style>
