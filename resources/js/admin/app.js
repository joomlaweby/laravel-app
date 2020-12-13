import '../bootstrap'
import Admin from './Admin'

const admin = new Vue({
    render: h => h(Admin)
}).$mount('#app')
