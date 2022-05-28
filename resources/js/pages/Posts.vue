<template>
	<div class="container-fluid position-relative">
		<div class="row" v-if="posts.length === 0">
			<div class="col-12">
				<Loader />
			</div>
		</div>
		<div class="row justify-content-center py-5" v-else>
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
import Loader from '../components/Loader.vue';

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
		Loader
	},
	methods: {
		getPosts(page) {
			axios.get(`http://localhost:8000/api/posts?page=${page}`)
			.then((result)=>{
				this.posts = result.data.data;
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
	div#pagination {
		position: fixed;
		left: 1rem;
		top: 50%;
		transform: translateY(-50%);
		ul {
			color: rgba(0, 0, 0, 0.842);
			width: 100px;
			font-size: 1.5rem;
		}
	}
</style>