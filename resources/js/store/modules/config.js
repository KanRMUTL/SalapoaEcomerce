export default {
    state: {
        address: '101/8 ม.2 ต.ช้างเผือก อ.เมือง จ.เชียงใหม่',
        phone: '086-4351469',
        email: 'Bossnoppadol@gmail.com',
        storeNameTh: 'ซาลาเปาไอที'
    },
    getters: {
        address: state => state.address,
        phone: state => state.phone,
        email: state => state.email,
        storeNameTh: state => state.storeNameTh,
    }
}
