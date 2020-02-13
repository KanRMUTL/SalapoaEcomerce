export default {
    state: {
        order: JSON.parse(localStorage.getItem('order')),
    },
    getters: {
        order(state) {
            return state.order
        }
    },
    mutations: {
        PUSH_ORDER: (state, payload) => {
            if(state.order == null){
                state.order = []
            }
            state.order.push(payload)
        },
        UPDATE_ORDER: (state) => {
            localStorage.setItem('order', JSON.stringify(state.order))
        }
    },
    actions: {
        pushOrder: ({commit}, payload) => {
            commit('PUSH_ORDER', payload)
        },
        updateOrder: ({commit}) => {
            commit('UPDATE_ORDER')
        }
    }
}
