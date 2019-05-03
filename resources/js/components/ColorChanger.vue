<template>
	<div class="card">
		<div class="card-content">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-12" style="margin-bottom: 10px;">
						<h6>Rosu</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="red" width="100%">
					</div>
					<div class="col-md-12" style="margin-bottom: 10px;">
						<h6>Verde</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="green">
					</div>
					<div class="col-md-12">
						<h6>Albastru</h6>
						<input type="range" name="red" min="0" max="255" step="1" v-model="blue">
					</div>
				</div>
				<div class="col-md-6 thumbnail">
					<!-- color box -->
					 <div class="box z-depth-4 text-center flex justify-center items-center" v-bind:style='{backgroundColor:colorBoxVal}'>
					 	<h1 ref="text">Machine Learning</h1>
					 </div>
				</div>
			</div>
		</div>
	</div>
</template>

<script type="text/javascript">
	import brain from 'brain.js';

	export default{

		data(){
			return{
				network: new brain.NeuralNetwork(),
				red:0,
				green:0,
				blue:0
			};
		},

		computed:{
			colorBoxVal(){
				return `rgb(${this.red},${this.green},${this.blue})`;
			}
		},

		created(){
	        this.network.train([
	            { input: { r: 0.62, g: 0.72, b: 0.88 }, output: { light: 1 } },
	            { input: { r: 0.98, g: 0.76, b: 0.13 }, output: { light: 1 } },
	            { input: { r: 0.1, g: 0.84, b: 0.72 }, output: { light: 1 } },
	            { input: { r: 0.33, g: 0.24, b: 0.29 }, output: { dark: 1 } },
	            { input: { r: 0.74, g: 0.78, b: 0.86 }, output: { light: 1 } },
	            { input: { r: 0.31, g: 0.35, b: 0.41 }, output: { dark: 1 } },
	            { input: {r: 1, g: 0.99, b: 0}, output: { light: 1 } },
	            { input: {r: 0.00, g: 0.91, b: 0.50}, output: { light: 1 } },
	            { input: {r: 0.00, g: 1.00, b: 0.50}, output: { light: 1 } },
	            { input: {r: 0.67, g: 1.00, b: 0.50}, output: { light: 1 } },
	            { input: {r: 0.00, g: 0.88, b: 0.52}, output: { light: 1 } },           
	            { input: {r: 1, g: 0.42, b: 0.52}, output: { dark: 1 } },
	            { input: {r: 0.95, g: 0, b: 0} , output: { light: 1 } },
	            { input: {r: 0.07, g: 0.36, b: 0.95} , output: { light: 1 } }, 
				{ input: {r: 0.97, g: 0.48, b: 0.73} , output: { light: 1 } },
	            { input: {r: 1, g: 0, b: 0.79} , output: { light: 1 } },
	            { input: {r: 0.16, g: 0, b: 1} , output: { light: 1 } },
	            { input: {r: 0, g: 1, b: 0} , output: { light: 1 } }
	        ]);
		},

		watch:{
			colorBoxVal(){
				this.changeTextColor()
			}	
		},
		mounted(){
			this.changeTextColor();
		},
		methods:{
			changeTextColor(){
		            let rgb = {
		            	r:Math.round(this.red / 2.55) / 100,
		            	g:Math.round(this.green / 2.55) / 100,
		            	b:Math.round(this.blue / 2.55) / 100
		            };
		            let result = brain.likely(rgb,this.network);
		            this.$refs.text.style.color = result === "dark" ? "white" : "black";
			}
		}
	}
</script>