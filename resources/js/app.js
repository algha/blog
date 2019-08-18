import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

require('./bootstrap');

import Routes from './src/routes/Routes.js';

Routes.map(function (route) {
  route.path = '/dashboard' + route.path
})

const router = new VueRouter({
  routes: Routes,
  mode: 'history',
})


import App from './src/App.vue';


export default new Vue({
    router,
    render: h => h(App),
});
