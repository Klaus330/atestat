<template>
     <div class="row">
        <div style="height: 480px; background: black;" :width="width" class="col-md-6">
            <div class="box1" ref="box"></div>
        </div>
        <div class="col-md-6">
            <div>
                <video ref="video" id="video" :width="width" :height="height" autoplay @click="guess" style="transform: scale(-1,1);"></video>
            </div>
            <h3>{{direction}}</h3>
            <button @click="leftKeyPressed" class="btn btn-md btn-primary">Left</button>
            <button @click="rightKeyPressed" class="btn btn-md btn-primary">Right</button>
            <button @click="saveData" class="btn btn-md btn-primary">Save data</button>
            <button @click="loadData" class="btn btn-md btn-primary">Load data</button>
            <vue-p5 v-on="{setup}"></vue-p5>
        </div>
        </div>
</template>

<script>
    import VueP5 from 'vue-p5';
    import ml5 from "ml5";

    export default {
        props:['width','height'],

      components: {
        "vue-p5": VueP5
      },

        data(){
            return {
                video: {},
                box:{},
                speed:10,
                features: '',
                direction:'Need training data',
                knn:null,
                context: null,
                canvas: null,
            };
        },

        mounted() {
            // tf.disableDeprecationWarnings();
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
                this.features = ml5.featureExtractor('MobileNet');
                this.knn = ml5.KNNClassifier();
                this.box= this.$refs.box;
            },

            leftKeyPressed(){
                console.log('left'); 

                this.knn.addExample(this.features.infer(this.video), 'left');
            },

            rightKeyPressed(){
                console.log('right'); 
                this.knn.addExample(this.features.infer(this.video), 'right');
            },

            saveData(){
                this.knn.save("model.json");
            },

            loadData(){
                this.knn.load("/json/model.json",this.guess);
            },

            guess(){
                this.knn.classify(this.features.infer(this.video), this.gotResult);
            },            

            gotResult(error, results){
                if(error)
                    console.error(error);
                else
                {
                    this.direction = results.label;
                    this.move(this.direction);
                    setTimeout(()=>{this.guess()},100);
                }
                
            },

            move(direction){
                if(direction == "left"){    
                    this.speed -= 15;
                    if(this.speed >= 0 )
                     { 
                        this.box.style.left = this.speed+'px';
                     }else{
                        this.speed = 0;
                     }
                }else if(direction == "right"){
                    
                    this.speed += 15;
                    if(this.speed <= (this.width-100))
                    {
                        this.box.style.left = this.speed+'px';
                    }else{
                        this.speed = this.width-40;
                     }
                }
            }

        }
    }
</script>


<style>
    .box1{
        position: relative;
        top: 10px;
        left: 30px;
        background: white;
        z-index: 10;
        width: 30px;
        height: 30px;
    }
</style>