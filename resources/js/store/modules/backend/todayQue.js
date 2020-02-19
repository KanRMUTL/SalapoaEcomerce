import axios from 'axios'
import swal from 'sweetalert'

export default {
    state: {
        todayQue: null,
        queSelected: null
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
        },
        UPDATE_STATUS_ORDER: (state, statusId) => {
            let orderId = state.queSelected.order_id
            axios.put(`/updatestatusorder/${orderId}`, {
                    statusId: statusId
                })
                .then(res => {
                    console.log('updated')
                    swal(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )
                    axios.get('/ordertoday')
                        .then(res => state.todayQue = res.data)
                        .catch(error => console.log(error))
                })
                .catch(error => console.log(error))
        }
    },
    actions: {
        getOrderToday: ({
            commit
        }) => {
            commit('GET_ORDER_TODAY');
        },
        setQueSelected: ({
            commit
        }, payload) => {
            commit('SET_QUE_SELECTED', payload)
        },
        updateStatusOrder: async ({
            commit
        }, statusId) => {
            await commit('UPDATE_STATUS_ORDER', statusId)
        }
    }
}
