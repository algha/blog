require('./bootstrap');
import Vue from 'vue';

import Routes from './src/Routes.js'; 

import App from './src/App.vue';


export default new Vue({
    Routes,
    render: h => h(App),
});
