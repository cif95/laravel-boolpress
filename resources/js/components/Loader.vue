<template>
	<div class="text-white" id="loader">
		<div class="lds-hourglass"></div>
	</div>
</template>

<script>
export default {
	name: 'Loader',
}
</script>

<style lang="scss" scoped>

div#loader{
	height: 100vh;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 100px;
  height: 100px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  border: 50px solid transparent;
  border-color: #30699b transparent rgb(17, 17, 17) transparent;
  animation: lds-hourglass 1.2s infinite;
}


@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
</style>