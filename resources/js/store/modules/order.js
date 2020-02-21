import axios from 'axios'

export default {
    state: {
        order: JSON.parse(localStorage.getItem('order')),
        orderList: [],
        orderSelected: null,
        status: [
            {
             class: 'text-info',
             title: 'บันทึกคำสั่งซื้อแล้ว'
            },
            {
             class: 'text-warning',
             title: 'ทางร้านกำลังจัดทำ'
            },
            {
             class: 'text-primary',
             title: 'ถึงคิวของลูกค้าแล้ว'
            },
            {
             class: 'text-success',
             title: 'ลูกค้าได้รับซาลาเปาแล้ว'
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
        },
        orderSelected: state => state.orderSelected
    },
    mutations: {
        SET_ORDER_LIST: (state) => {
            state.order.forEach(item => {
                axios.get(`/getorder/${item}`)
                    .then( function (res){
                        state.orderList.push(res.data)
                    }).catch(error=> {
                        console.log(error)
                    })
            })
        },
        SET_ORDER_SELECTED: (state, payload) => {
            state.orderSelected = payload
        }
    },
    actions: {
        setOrderList: ({commit}) => {
            commit('SET_ORDER_LIST')
        },
        setOrderSelected({commit}, payload) {
            commit('SET_ORDER_SELECTED', payload)
        }
    }
}
