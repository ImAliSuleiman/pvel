/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// require('./components/Example');
// require('./components/Product');

window.Vue = require('vue');

import router from './router';

Vue.component('Product', require('./components/Product.vue').default);
Vue.component('Navie', require('./components/Nav.vue').default);
Vue.component('HomePage', require('./components/pages/home.vue').default);

const vm = new Vue({
    el: "#app",
    router
});
