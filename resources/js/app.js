require('./bootstrap');
window.Vue = require('vue');

import App from '../views/App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from '../js/routes';
import VueRouter from 'vue-router';
import wysiwyg from "vue-wysiwyg";

Vue.use(wysiwyg, {maxHeight: "300px"});
Vue.use(VueRouter);
Vue.use(VueAxios, axios);   

const router = new VueRouter({
  mode:'history',
  routes:routes
});

const app = new Vue({
  router: router,
  el: '#app',
  render: a => a(App)
});
