<template>
<div class="container-fluid">
	<div class="row justify-content-center py-5">
		<Post
			class="col-7 py-5"
			v-for="(post, index) in posts"
			:key=index
			:post="post"
		/>
	</div>
</div>
</template>

<script>

import Post from '../components/Post.vue';

export default {
	name: 'Posts',
	data() {
		return {
			posts: [],
		}
	},
	components: {
		Post,
	},
	methods: {
		getPosts() {
			axios.get('http://localhost:8000/api/posts')
			.then((result)=>{
				this.posts = result.data.results;
			})
			.catch((error)=>{
				console.log(error);
			})
		},

	},
	created() {
		this.getPosts();
	}
}
</script>

<style lang="scss" scoped>
	div.container-fluid {
		background-color: #3e3e3e;
	}
</style>