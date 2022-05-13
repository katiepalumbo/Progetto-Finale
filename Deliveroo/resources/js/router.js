import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Item from './pages/Item';
import CheckOut from './pages/CheckOut';
import RestaurantMenu from './pages/RestaurantMenu';
import Menu from './pages/Menu.vue';

const router = new VueRouter({
    mode: "history",

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/item',
            name: 'item',
            component: Item
        },
        {
            path: '/menu/:slug/:cart',
            name: 'checkout',
            component: CheckOut
        },
        {
            path: '/menu',
            name: 'menu',
            component: Menu
        },
        {
            path: '/menu/:slug',
            name: 'restaurant',
            component: RestaurantMenu
        },


    ]
});

export default router
