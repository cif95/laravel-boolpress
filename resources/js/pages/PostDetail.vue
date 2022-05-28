<template>
	<div class="container-fluid position-relative">
		<div class="row" v-if="post.length === 0">
			<div class="col-12">
				<Loader />
			</div>
		</div>
		<div class="row justify-content-center py-5" v-else>
			<div class="col-7 clearfix">
				<div id="circle">
					<img :src="post.image_url" class="img-fluid rounded-pill" :alt="`${post.title} post image`">
				</div>
				<div class="post-info py-5">
					<h1>Author{{post.title}}</h1>
					<p>{{post.description}}</p>
					<p>Author: {{post.author}}</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

import Loader from '../components/Loader.vue';


export default {
	name: 'Posts',
	data() {
		return {
			post: [],
		}
	},
	components: {
		Loader
	},
	methods: {
		getPosts(postId) {
			axios.get(`http://localhost:8000/api/posts/${postId}`)
			.then((result)=>{
				this.post = result.data;
			})
			.catch((error)=>{
				console.log(error);
			})
		},

	},
	created() {
		this.getPosts(this.$route.params.id);
	}
}
</script>

<style lang="scss" scoped>
	#circle {
		padding: 1rem;
		shape-outside: circle(50%);
		width: 35vw;
		float: left;
	}
</style>