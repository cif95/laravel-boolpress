require('./bootstrap');

import Axios from 'axios';
import App from "./views/App.vue";
import router from './router.js';

window.Vue = require('vue');


const app = new Vue({
    el: '#root',
		router: router,
    render: h => h(App),
});