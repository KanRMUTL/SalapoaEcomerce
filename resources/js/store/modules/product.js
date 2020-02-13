import axios from 'axios'
export default {
    state: {
        products: [{
            "product_id": 1,
            "product_name": "ไส้อั่ว",
            "product_img": "01.jpg",
            "product_price": "20",
            "created_at": null,
            "updated_at": null
        }, {
            "product_id": 2,
            "product_name": "ไส้มะพร้าวหวาน",
            "product_img": "02.jpg",
            "product_price": "13",
            "created_at": null,
            "updated_at": null
        }, {
            "product_id": 3,
            "product_name": "ไส้พุทราถั่วแดง",
            "product_img": "03.jpg",
            "product_price": "15",
            "created_at": null,
            "updated_at": null
        }, {
            "product_id": 4,
            "product_name": "ไส้กะเพราไข่เค็ม",
            "product_img": "04.jpg",
            "product_price": "20",
            "created_at": null,
            "updated_at": null
        }, {
            "product_id": 5,
            "product_name": "ไส้เค็ม",
            "product_img": "05.jpg",
            "product_price": "10",
            "created_at": null,
            "updated_at": null
        }, {
            "product_id": 6,
            "product_name": "ไส้ถั่วแดง",
            "product_img": "06.jpg",
            "product_price": "10",
            "created_at": null,
            "updated_at": null
        }]
    },
    getters: {
        products(state) {
            return state.products
        }
    },
    mutations: {
        async GET_PRODUCTS(state) {
            let {
                data
            } = await axios.get('/getproducts');
            state.products = data;
        }
    },
    actions: {
        getProduct({
            commit
        }) {
            commit('GET_PRODUCTS');
        }
    }
}
