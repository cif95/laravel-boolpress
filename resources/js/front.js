window.axios = require('axios');

window.Vue = require('vue');

// import router from './router';


import App from "./views/App.vue";
import VueRouter from 'vue-router';
import Home from './pages/Home';
import Posts from './pages/Posts';
import PostDetail from './pages/PostDetail';
import AboutUs from './pages/AboutUs';

window.Vue.use(VueRouter);


const router = new VueRouter({
	mode: 'history',
	routes : [
			{
					path: '/',
					name: 'home',
					component: Home
			},
			{
					path: '/posts',
					name: 'posts',
					component: Posts
			},
			{
					path: '/about-us',
					name: 'about-us',
					component: AboutUs
			},
			{
				path: '/posts/:id',
				name: 'post_detail',
				component: PostDetail
			}

	]
});


const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});