import axios from 'axios'
export default {
    state: {
        todayQue: [],
        queSelected: {}
    },
    getters: {
        todayQue: state => state.todayQue,
        queSelected: state => state.queSelected
    },
    mutations: {
        GET_ORDER_TODAY: (state) => {
            axios.get('/ordertoday')
                .then(res => state.todayQue = res.data)
                .catch(error => console.log(error))
        },
        SET_QUE_SELECTED: (state, payload) => {
            state.queSelected = payload
        }
    },
    actions: {
        getOrderToday: ({commit}) => {
            commit('GET_ORDER_TODAY');
        },
        setQueSelected: ({commit}, payload) => {
            commit('SET_QUE_SELECTED', payload)
        }
    }
}
