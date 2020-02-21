<template>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link text-center">
      <span class="brand-text font-weight-light ">ซาลาเปาไอที</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item" v-for="(menuItem, key) in menu" :key="key">
            <router-link :to="menuItem.path" :class="'nav-link ' + active(menuItem.check)" >
              <i :class="`nav-icon fas fa-${menuItem.icon}`"></i>
              <p>
                {{ menuItem.title }}
              </p>
            </router-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
export default {
    data () {
        return {
            menu: [
                {
                    title: 'แดชบอร์ด',
                    path: '/admin/dashboard',
                    check: 'dashboard',
                    icon: 'tachometer-alt'
                },
                {
                    title: 'คิววันนี้',
                    path: '/admin/que',
                    check: 'que',
                    icon: 'list'
                },
                {
                    title: 'ประวัติการขาย',
                    path: '/admin/history',
                    check: 'history',
                    icon: 'clock'
                },
                {
                    title: 'การขายสินค้า',
                    path: '/admin/product',
                    check: 'product',
                    icon: 'shopping-cart'
                },
            ]
        }
    },
    methods: {
        active(check){
            return this.currentPage.includes(check) ? 'active' : '';
        },
    },
    computed: {
        currentPage () {
            return this.$route.path
        }
    }
}
</script>

<style>

</style>
