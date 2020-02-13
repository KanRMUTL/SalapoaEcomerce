<template>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="store/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>ที่อยู่: {{ address }}</li>
                            <li>เบอร์โทร: {{ phone }}</li>
                            <li>Email: {{ email }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-widget">
                        <h5>เมนู</h5>
                        <ul>
                            <li class="active"><a href="/">หน้าแรก</a></li>
                            <li><a href="#">เลือกซื้อซาลาเปา</a></li>
                            <li><a href="/cart">ตะกร้าสินค้า</a></li>
                            <li><a href="/checkout">ตะกร้าสินค้า</a></li>
                            <li><a href="#">ติดต่อเรา</a></li>
                            <li><a href="#">ผู้ดูแลระบบ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</template>

<script>
import {mapGetters} from 'vuex'

export default {
    computed: {
        ...mapGetters(['address', 'phone', 'email'])
    }
}
</script>

<style>

</style>
