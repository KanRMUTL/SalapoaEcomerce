<template>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header p-0">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./">
                                <img src="store/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-7 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span v-if="productAmount">{{ productAmount }}</span>
                                </a>
                               <CartHover />
                            </li>
                            <li class="cart-price">฿{{ total }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <Menu :menuSelected="menuSelected"/>
    </header>
    <!-- Header End -->
</template>

<script>
import Menu from '../layouts/Menu'
import CartHover from '../layouts/CartHover'
import {mapGetters} from 'vuex'

export default {
    props: {
        menuSelected: {
            type: String,
            required: true
        }
    },
    components: {
        Menu,
        CartHover
    },
    computed: {
        ...mapGetters({
            productAmount: 'amount',
            total: 'total'
        })
    }
}
</script>

<style>

</style>
