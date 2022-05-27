<template>
	<div class="container-fluid py-5">
		<router-view></router-view>
	</div>
</template>

<script>
export default {
	name: 'Main',
}
</script>

<style lang="scss" scoped >
	div.container-fluid {
		background-color: #3e3e3e;
	}
</style>