<template>
<div class="container-fluid">
	<div class="row">
		<div class="col-6 p-5 align-self-center">
			<h1 class="text-uppercase">Discover our world</h1>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatum iusto.
			</p>
		</div>
		<div class="col-6 col-bg"></div>
	</div>
</div>

</template>

<script>
export default {
	name: 'Home',
}
</script>

<style lang="scss" scoped>
	div.row {
		height: calc(100vh - 60px);
		div.col-bg {
			background: url('/img/bg_2.jpg') center / cover;
			-webkit-clip-path: polygon(50% 0, 100% 38%, 81% 100%, 19% 100%, 0 38%);
			clip-path: polygon(50% 0, 100% 38%, 81% 90%, 19% 90%, 0 38%);
		}
		div.col-6 {
			color: black;
			h1 {
				font-family: 'Major Mono Display', monospace;
				font-size: 4rem;
			}
			p {
				width: 50%;
			}
			h1,p {
				filter: opacity(1);
				animation: 2s slowEntrance reverse ease-in-out;
				animation-delay: -1s;
			}
		}
	}
</style>