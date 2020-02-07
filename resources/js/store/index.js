import Vue from 'vue'
import Vuex from 'vuex'

// Others store
import cart from './modules/cart'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        cart
    }
})
