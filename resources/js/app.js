/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import 'popper.js';
import 'mdbootstrap'

Vue.use(VueRouter);

//Vue.component('modalcom', require('./components/productmodal.vue'));
const home = require('./components/Home.vue');
const project = require('./components/Project.vue');
const service = require('./components/Service.vue');
const shop = require('./components/Shop.vue');
const admins = require('./components/adminC/index.vue');
const product = require('./components/product.vue');
const category = require('./components/adminC/category.vue');

const routes = [{
        path: '/',
        //name:home,
        component: home,
    },
    {
        path: '/project',
        //name:project,
        component: project,
    },
    {
        path: '/service',
        //name:service,
        component: service,
    },
    {
        path: '/shop',
        //name:shop,
        component: shop,
    },

    {
        path: '/admin/admins',
        component: admins,
    },
    {
        path: '/admin/product',
        component: product,
    },
    {
        path: '/admin/category',
        component: category,
    }


]
const router = new VueRouter({
    mode: 'history',
    routes,
})
const app = new Vue({
    el: '#app',
    router
});
