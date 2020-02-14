import axios from 'axios'

export default {
    state: {
        order: JSON.parse(localStorage.getItem('order')),
        orderList: [],
        status: [
            {
             class: 'text-info',
             title: 'บันทึกคำสั่งซื้อแล้ว'
            },
            {
             class: 'text-primary',
             title: 'ทางร้านกำลังจัดทำ'
            },
            {
             class: 'text-success',
             title: 'ถึงคิวของท่านแล้ว'
            },
        ]
    },
    getters: {
        order(state) {
            return state.order
        },
        orderList(state) {
            return state.orderList
        },
        status(state) {
            return state.status
        }
    },
    mutations: {
        SET_ORDER_LIST: (state) => {
            state.order.forEach(item => {
                axios.get(`/getorder/${item}`)
                    .then( function (res){
                        state.orderList.push(res.data)
                        console.log(state.orderList)
                    })
            })
        }
    },
    actions: {
        setOrderList: ({commit}) => {
            commit('SET_ORDER_LIST')
        }
    }
}
