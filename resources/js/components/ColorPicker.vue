<template>
	<div class="card">
		<div class="card-content">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-6">
						<h6>RED</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="red">
					</div>
					<div class="col-md-6">
						<h6>GREEN</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="green">
					</div>
					<div class="col-md-6">
						<h6>BLUE</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="blue">
					</div>
				</div>
				<div class="col-md-6">
					<!-- color box -->
					 <div class="box z-depth-4 text-center" v-bind:style='{backgroundColor:colorBoxVal}'>
					 	<h1>Example text</h1>
					 </div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				red:0,
				green:0,
				blue:0
			};
		},

		computed:{
			colorBoxVal(){
				return `rgb(${this.red},${this.green},${this.blue})`;
			}
		}
	}
</script>

<style>
	.box{
		width: 100%;
		height:300px;
		background: red;
	}
</style>