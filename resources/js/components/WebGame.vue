<template>
     <div>        
        <div>
            <video ref="video" id="video" :width="width" :height="height" autoplay @click="start" style="transform: scale(-1,1);"></video>
        </div>
        <h3>{{direction}}</h3>
        <button @click="leftKeyPressed">Left</button>
        <button @click="rightKeyPressed">Right</button>
        <button @click="saveData">Save data</button>
        <button @click="loadData">Load data</button>
        <vue-p5 v-on="{setup}"></vue-p5>
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
                clip:'',
                startGame:false,
                features: '',
                direction:'Need training data',
                knn:null,
                logits: null,
                sketch:null
            };
        },

        mounted() {
            tf.disableDeprecationWarnings();
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

            start(){
                this.startGame = true;
                this.guess();
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
                    console.log(results);
                    setTimeout(()=>{this.guess()},500);
                }
                
            },

            // move(direction){
            //     if(direction == "left"){    
            //         this.speed -= 10;
            //         if(this.speed >= 0 )
            //          { 
            //             console.log(this.speed);
            //             this.box.style.left = this.speed+'px';
            //          }else{
            //             this.speed = 0;
            //          }
            //     }else if(direction == "right"){
                    
            //         this.speed += 10;
            //         if(this.speed <= (this.width-40))
            //         {
            //             this.box.style.left = this.speed+'px';
            //         }else{
            //             this.speed = this.width-40;
            //          }
            //     }
            // }

        }
    }
</script>
