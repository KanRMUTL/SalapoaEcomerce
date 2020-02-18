require('./bootstrap');
import router from './router'
import Vue from 'vue'
import store from './store/index'
import Backend from './pages/backend/Backend'

Vue.component('index', require('./pages/Index.vue').default)
Vue.component('cart', require('./pages/Cart.vue').default)
Vue.component('checkout', require('./pages/Checkout.vue').default)
Vue.component('que', require('./pages/Que.vue').default)
Vue.component('shop', require('./pages/Shop.vue').default)
Vue.component('backend', require('./pages/backend/Backend.vue').default)

const app = new Vue({
    el: '#app',
    components: { Backend },
    store: store,
    router
});
