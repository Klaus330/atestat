<template>
     <div>
        <div><video ref="video" id="video" width="640" height="480" autoplay></video></div>
        
        <h3>The MobileNet model labeled this video as a <i>{{name}}</i></h3>
        <vue-p5 v-on="{setup}"></vue-p5>
        </div>
</template>

<script>
    import VueP5 from 'vue-p5';
    import p5 from 'p5';
    import ml5 from "ml5";

    export default {
      components: {
        "vue-p5": VueP5
      },

        data(){
            return {
                video: {},
                clip:'',
                mobilenet: '',
                name:'',
                prob:0,
                sketch:null
            };
        },
        mounted() {
             this.video = this.$refs.video;
            if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true }).then(stream => {
                    this.video.srcObject = stream;
                    this.video.play();
                });
            }     
        },
        methods: {
            setup(){
                this.mobilenet = ml5.imageClassifier('MobileNet',this.video,this.modelReady);
            },
            modelReady(){
                this.mobilenet.predict(this.gotResult);
            },

            gotResult(error, results){
                if(error)
                    console.error(error);
                else
                {
                    console.log(results);
                    this.name = results[0].className;
                    this.prob = Math.floor(results[0].probability*100);         
                    this.modelReady();
                }
            },

        }
    }
</script>
