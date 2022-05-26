<template>
	<div class="container-fluid p-5">
		<Posts />
	</div>
</template>

<script>

import Posts from '../components/Posts.vue';

export default {
	name: 'App',
	components: {
		Posts,
	}
}
</script>

<style lang="scss" scoped>
div.container-fluid {
	background-color: #3e3e3e;
}
</style>