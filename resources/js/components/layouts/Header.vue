<template>

    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        store_xx@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        084 - xxx xxxx
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

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
                                    <span>3</span>
                                </a>
                               <CartHover />
                            </li>
                            <li class="cart-price">฿41.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <Menu />
    </header>
    <!-- Header End -->
</template>

<script>
import Menu from '../layouts/Menu'
import CartHover from '../layouts/CartHover'
export default {
    components: {
        Menu,
        CartHover
    }
}
</script>

<style>

</style>
