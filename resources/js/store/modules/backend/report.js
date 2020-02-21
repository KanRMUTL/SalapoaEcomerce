import axios from 'axios'

export default {
    state: {
        productReport: null
    },
    getters: {
        productReport:state =>  state.productReport
    },
    mutations: {
        GET_REPORT: (state) => {
            axios.get('/reportorder').then((res) => {
                state.productReport = res.data
            })
        }
    },
    actions: {
        getReport({commit}) {
            commit('GET_REPORT')
        }
    }
}
