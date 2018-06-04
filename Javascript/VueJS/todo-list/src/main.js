import Vue from 'vue'
import App from './App.vue'

import VueRouter from 'vue-router'
Vue.use(VueRouter);

import Routes from './routes'
const router = new VueRouter({
    routes: Routes,
    //mode: 'history'
});

import jQuery from 'jquery';
//Vue.use(jQuery);
window.jQuery = jQuery;
window.$ = jQuery;

require('bootstrap');
require('bootstrap/dist/css/bootstrap.min.css');
require('bootstrap/dist/css/bootstrap-theme.min.css');
require('./assets/css/style.css');


import Comments from './components/comments/Comments.vue';
Vue.component('comments-component', Comments);

Vue.config.productionTip = false;

new Vue({
    render: h => h(App),
    router: router
}).$mount('#app');
