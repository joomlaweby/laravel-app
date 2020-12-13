import Router from "vue-router";
import Vue from 'vue'
import Dashboard from './views/Dashboard'
import Articles from './views/Articles'
import Comments from './views/Comments'
import Users from './views/Users'
import Categories from './views/Categories'
Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/admin/',
            component: Dashboard
        },
        {
            path: '/admin/articles',
            component: Articles
        },
        {
            path: '/admin/comments',
            component: Comments
        },
        {
            path: '/admin/users',
            component: Users
        },
        {
            path: '/admin/categories',
            component: Categories
        }
    ]
})
