import Vue from 'vue';
import Router from 'vue-router';

// Plug-in the plugin
Vue.use(Router);

import aboutPage from './components/pages/about';
import homePage from './components/pages/home';

const routes = [
    {
        path: '/about',
        component: aboutPage
    },
    {
        path: '/home',
        component: homePage
    },
]

export default new Router(
    {
        mode: 'history',
        routes
    }
)

