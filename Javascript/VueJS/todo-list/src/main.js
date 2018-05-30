import Vue from 'vue'
import App from './App.vue'

import jQuery from 'jquery';
//Vue.use(jQuery);
window.jQuery = jQuery;
window.$ = jQuery;

require('bootstrap');
require('bootstrap/dist/css/bootstrap.min.css');
require('bootstrap/dist/css/bootstrap-theme.min.css');
require('./assets/css/style.css');

Vue.config.productionTip = false;

new Vue({
  render: h => h(App)
}).$mount('#app');
