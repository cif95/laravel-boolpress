<template>
	<div class="col">
		<div class="card mb-3">
			<div class="row g-0">
				<div class="col-md-4">
					<img :src="post.image_url" class="img-fluid rounded-start" :alt="`${post.title} post image`">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">{{ post.title }}</h5>
						<p class="card-text">
							{{post.description}}
						</p>
						<p class="card-text">
							<small class="text-muted">
								Created on: {{post.created_at}}
							</small>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>


export default {
	name: 'Post',
	props: ['post'],
}
</script>

<style lang="scss" scoped>

</style>