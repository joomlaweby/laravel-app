import Router from "vue-router";
import Vue from 'vue'
import Dashboard from './views/Dashboard'
Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/admin/',
            component: Dashboard
        }

    ]
})
