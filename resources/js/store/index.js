import Vue from 'vue'
import Vuex from 'vuex'

// Others store
import cart from './modules/cart'
import product from './modules/product'
import config from './modules/config'
import order from './modules/order'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        config,
        cart,
        product,
        order
    }
})
