<template>
  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items owl-carousel">
      <div class="single-hero-items set-bg" data-setbg="store/img/food/04.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center" style="background: rgba(255,255,255,0.5); padding: 2%; border-radius: 10px;">
              <h1>{{ storeNameTh }}</h1>
              <p>
                คุณสามารถเลือกซื้อซาลาเปาไส้ต่างๆ บนเว็บไซต์ของเราล่วงหน้า<br>
                จากนั้นนำบัตรคิวที่ได้จากเว็บไซต์ไปยืนยันกับทางร้านเพื่อรับซาลาเปา <br>
                👉<b style="color: green">สะดวก, รวดเร็ว, ไม่ต้องยืนรอนาน</b>👈
              </p>
              <a href="#" class="primary-btn">ซื้อเลย</a>
            </div>
          </div>
        </div>
      </div>
      <div class="single-hero-items set-bg" data-setbg="store/img/food/01.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center" style="background: rgba(255,255,255,0.5); padding: 2%; border-radius: 10px;">
              <h1>{{ storeNameTh }}</h1>
              <p>
                คุณสามารถเลือกซื้อซาลาเปาไส้ต่างๆ บนเว็บไซต์ของเราล่วงหน้า<br>
                จากนั้นนำบัตรคิวที่ได้จากเว็บไซต์ไปยืนยันกับทางร้านเพื่อรับซาลาเปา <br>
                👉<b style="color: green">สะดวก, รวดเร็ว, ไม่ต้องยืนรอนาน</b>👈
              </p>
              <a href="#" class="primary-btn">ซื้อเลย</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->
</template>

<script>
import {mapGetters} from 'vuex'

export default {
    computed: {
        ...mapGetters(['storeNameTh', 'storeNameEng'])
    }
};
</script>

<style>
</style>
