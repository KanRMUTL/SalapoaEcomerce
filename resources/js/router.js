import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Dashboard from './components/backend/dasboard/Dashboard'
import Que from './components/backend/que/Que'

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin/dashboard',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/admin',
            name: 'dashboard2',
            component: Dashboard
        },
        {
            path: '/admin/que',
            name: 'que',
            component: Que
        }
    ],
});
