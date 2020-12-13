import '../bootstrap'
import Vue from 'vue'

import Admin from './Admin'
import router from './router'

const admin = new Vue({
    router,
    render: h => h(Admin)
}).$mount('#app')
