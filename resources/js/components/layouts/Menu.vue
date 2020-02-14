<template>
  <div class="nav-item">
    <div class="container text-center">
      <nav class="nav-menu mobile-menu">
        <ul>
          <li
            v-for="(item, key) in menu"
            :key="key"
            :class="{'active': isActive(item.check)}"
            >
            <a :href="item.path">{{ item.title }}</a>
          </li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        menuSelected: {
            type: String,
            required: true
        }
    },
    data () {
        return {
            menu: [
                {
                    title: 'หน้าแรก',
                    path: '/',
                    check: 'home'
                },
                {
                    title: 'เลือกซื้อซาลาเปา',
                    path: '/shop',
                    check: 'shop'
                },
                {
                    title: 'ตะกร้าสินค้า',
                    path: '/cart',
                    check: 'cart'
                },
                {
                    title: 'ชำระเงิน',
                    path: '/checkout',
                    check: 'checkout'
                },
                {
                    title: 'คิวของคุณ',
                    path: '/que',
                    check: 'que'
                }
            ]
        }
    },
    methods: {
        isActive(check) {
            return check == this.menuSelected
        }
    }
};
</script>

<style>
</style>
