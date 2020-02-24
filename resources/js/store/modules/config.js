export default {
    state: {
        address: '101/8 ม.2 ต.ช้างเผือก อ.เมือง จ.เชียงใหม่',
        phone: '086-4351469',
        email: 'Bossnoppadol@gmail.com',
        storeNameTh: 'ซาลาเปาไอที',
        paymentType: [
            {
                title: 'ชำระเงินผ่านพร้อมเพย์',
                value: '0'
            },
            {
                title: 'ชำระเงินปลายทาง',
                value: '1'
            }
        ],
        shippingType: [
            {
                title: 'เดินทางไปรับด้วยตนเอง',
                value: '0',
                class: 'text-success'
            },
            {
                title: 'ทางร้านจัดส่งให้',
                value: '1',
                class: 'text-primary'
            }
        ]
    },
    getters: {
        address: state => state.address,
        phone: state => state.phone,
        email: state => state.email,
        storeNameTh: state => state.storeNameTh,
        paymentType: state => state.paymentType,
        shippingType: state => state.shippingType
    }
}
