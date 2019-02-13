<template>
	<div class="p5">
		<h3>The MobileNet model labeled this image as a <i>{{name}}</i> with a confidence of <i>{{prob}}%</i></h3>
		<img :src="imagePath" :width="width" :height="height">
		<input type="file" @change="changePrediction" class="mt-1"></input>
		<vue-p5 v-on="{preload}"></vue-p5>
	</div>
</template>

<script>
	import VueP5 from 'vue-p5';
	import ml5 from "ml5";

	export default{

	  props:['width','height'],

	  components: {
	    "vue-p5": VueP5
	  },

	  data(){
	  	return {
	  		mobilenet: ml5.imageClassifier('MobileNet',this.modelReady),
	  		ml: ml5,
	  		imagePath:'/img/puffin.jpg',
	  		image: '',
	  		name:'',
	  		prob:0,
	  		sketch:null
	  	};
	  },

	  methods:{
		preload(sketch, image){
			this.sketch = sketch;
			this.image = sketch.loadImage(`/img/puffin.jpg`);
		},

		modelReady(image = null){
			
			this.mobilenet.predict(image ? image: this.image, this.gotResult);
		},

		gotResult(error, results){
			if(error)
				console.error(error);
			else
			{
				this.name = results[0].className;
				this.prob = Math.floor(results[0].probability*100);			
			}
		},

		changePrediction(event){
		  const dt = event.target;
		  const files = dt.files;
		  if (files.length > 1) {
		  	alert('upload only one file!');
		  }
		  const file = files[0];
		  const imageType = /image.*/;
		  if (file.type.match(imageType)) {
		    
		    const reader = new FileReader();
		    reader.readAsDataURL(file);
		    reader.onloadend = () => {
		      this.imagePath = reader.result;
		      this.image = this.sketch.loadImage(reader.result);

		      setTimeout(this.modelReady, 100);
		    }
		}
		}
	  }
	}
</script>
