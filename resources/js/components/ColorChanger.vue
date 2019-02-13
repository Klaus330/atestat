<template>
	
	<div>
		<input ref="color" type="color" name="color" id="color" value="#ff0000">

	    <div id="div" ref="div" style="padding: 30px; background:#ff0000">
	        <h1 id="text" ref="text" style="color:black">Example text</h1>
	    </div>
	</div>

</template>

<script type="text/javascript">
	import brain from 'brain.js';

	export default{

		data(){
			return{
				network: new brain.NeuralNetwork()
			};
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
		            { input: {r: 0.07, g: 0.36, b: 0.95} , output: { light: 1 } }
		        ]);
		},

		mounted(){
			    let input = this.$refs.color;
		        let div = document.querySelector("#div");
		        let text = document.querySelector("#text");

		        input.addEventListener('change',(e) => {
		            let rgb = this.toRGB(e.target.value);

		            let result = brain.likely(rgb,this.network);
		            
		            div.style.background = e.target.value;
		            text.style.color = result === "dark" ? "white" : "black";
		        });

		},

		methods:{
			  toRGB(hex){
                var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
                hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                  return r + r + g + g + b + b;
                });

                var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
                return result ? {
                  r: Math.round(parseInt(result[1], 16) / 2.55) / 100,
                  g: Math.round(parseInt(result[2], 16) / 2.55) / 100,
                  b: Math.round(parseInt(result[3], 16) / 2.55) / 100,
                } : null;
		      } 
		}
	}
</script>