<template>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Boolpress</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li 
							class="nav-item"
							v-for="(link, index) in navLinks"
							:key=index
						>
							<router-link class="nav-link" :to="{ name: link.routeName }">
								{{ link.text }}
							</router-link>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</template>

<script>
export default {
	name: 'Header',
	data() {
		return {
			navLinks: [
				{
					text: 'Home',
					routeName: 'home'
				},
				{
					text: 'Posts',
					routeName: 'posts'
				},
				{
					text: 'About us',
					routeName: 'about-us'
				}
				],
		}
	}
}
</script>

<style lang="scss" scoped>

header {
	height: 60px;
	a.navbar-brand {
		font-family: 'Major Mono Display', monospace;
		padding-right: 0.2rem;
		border-right: 1px solid rgba(0, 0, 0, 0.822);
	}
	.nav-link {
		text-transform: uppercase;
		font-family: 'Quicksand', sans-serif;
	}
}

</style>