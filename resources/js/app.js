

require('./bootstrap');

import Vue from 'vue'
import store from './store/index'

Vue.component('index', require('./pages/Index.vue').default)
Vue.component('cart', require('./pages/Cart.vue').default)
Vue.component('checkout', require('./pages/Checkout.vue').default)

const app = new Vue({
    el: '#app',
    store: store
});
