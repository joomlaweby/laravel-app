import '../bootstrap'
import Vue from 'vue'
import Admin from './Admin'

const admin = new Vue({
    render: h => h(Admin)
}).$mount('#app')
