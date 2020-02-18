<template>
    <div>
        <Nav />
        <Menu />
        <div class="content-wrapper">
            <div class="content-header">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
import Nav from "../../components/backend/Nav";
import Menu from "../../components/backend/Menu";

export default {
    components: {
        Nav,
        Menu
    },
    data () {
        return {
            title: 'แดชบอร์ด'
        }
    }
};
</script>

<style></style>
