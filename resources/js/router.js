import Vue from 'vue';
import VueRouter from 'vue-router';

// components
import Home from './pages/Home';
import Posts from './pages/Posts';
import PostDetail from './pages/PostDetail';
import AboutUs from './pages/AboutUs';

Vue.use(VueRouter);

// routes
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

export default router;

