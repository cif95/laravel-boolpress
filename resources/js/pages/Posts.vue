<template>
<div class="container-fluid position-relative">
	<div class="row justify-content-center py-5">

		<div class="col-12 text-center" id="pagination">
			<nav aria-label="Page navigation">
				<ul class="pagination flex-column">
					<li class="page-item" v-if="res_pages.currPage > 1"
					@click="getPosts(res_pages.currPage - 1)">
						<i class="fa-solid fa-circle-chevron-left"></i>
					</li>
					<li class="page-item">
						{{res_pages.currPage}}
					</li>
					<li class="page-item" v-if="res_pages.currPage < res_pages.lastPage"
					@click="getPosts(res_pages.currPage + 1)">
							<i class="fa-solid fa-circle-chevron-right"></i>
					</li>
				</ul>
			</nav>
		</div>

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
			res_pages: {}
		}
	},
	components: {
		Post,
	},
	methods: {
		getPosts(page) {
			axios.get(`http://localhost:8000/api/posts?page=${page}`)
			.then((result)=>{
				this.posts = result.data.data;
				console.log(result);
				const { current_page, last_page } = result.data;
				this.res_pages = { currPage : current_page, lastPage : last_page};
			})
			.catch((error)=>{
				console.log(error);
			})
		},

	},
	created() {
		this.getPosts(1);
	}
}
</script>

<style lang="scss" scoped>
	div.container-fluid {
		background-color: #3e3e3e;
	}
	div#pagination {
		position: fixed;
		left: 1rem;
		top: 50%;
		transform: translateY(-50%);
		ul {
			color: white;
			width: 100px;
			font-size: 1.5rem;
		}
	}
</style>