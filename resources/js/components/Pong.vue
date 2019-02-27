<template>
	<div>
		<canvas ref="pong" :width="width" :height="height" class="border"></canvas>
	</div>
</template>


<script>
	export default{
		props:['width', 'height', 'startGame'],

		data(){
			return{
				framePerSec:60,
				context: null,
				canvas: null,
				computerLevel: 0.05,
				user:{
					x:0,
					y:this.height/2 - 50,
					width:20,
					height:100,
					color:"white",
					score:0
				},
				com:{
					x:this.width - 20,
					y:this.height/2 - 50,
					width:20,
					height:100,
					color:"white",
					score:0
				},
				net:{
					x: this.width/2 - 5/2, 
					y: 0,
					width:5,
					height: 25,
					color:"white",
				},
				ball:{
					x: this.width/2,
					y: this.height/2,
					radius:20,
					speed:5,
					velocityX: 5,
					velocityY: 5,
					color:"white"
				}
			};
		},

		watch:{
			startGame:function(val){
				this.play();
			}
		},

		mounted(){
			this.context = this.$refs.pong.getContext("2d");
			this.canvas = this.$refs.pong;
			this.render();
			this.canvas.addEventListener("mousemove", this.movePaddle);
		},
		methods:{

			game(){
				this.update();
				this.render();
			},

			update(){
				this.ball.x += this.ball.velocityX;
				this.ball.y += this.ball.velocityY;

				this.computerResponse();
				if(this.ball.y + this.ball.radius > this.height || this.ball.y - this.ball.radius < 0 ){
					this.ball.velocityY = -this.ball.velocityY;
				}

				let player = (this.ball.x < this.width/2) ? this.user : this.com;

				if(this.collision(this.ball, player)){
					let collidePoint = (this.ball.y - (player.y + player.height/2));
					
					collidePoint = collidePoint / (player.height/2);

					let angleRad = collidePoint *  (Math.PI/4); 

					let direction = (this.ball.x < this.width/2) ? 1 : -1;

					this.ball.velocityX = direction * this.ball.speed * Math.cos(angleRad);
					this.ball.velocityY = direction * this.ball.speed * Math.sin(angleRad);

					this.ball.speed += 0.1;
				}

				if(this.ball.x - this.ball.radius < 0){
					this.com.score += 1;
					this.resetBall();
				}
				else if( this.ball.x + this.ball.radius > this.width){
					this.user.score += 1;
					this.resetBall();
				}
			},

			resetBall(){
				this.ball.x = this.width/2;
				this.ball.y = this.height/2;
				this.ball.speed = 5;
				this.ball.velocityX = -this.ball.velocityX;
			},

			collision(ball, player){
				player.top = player.y;
				player.bottom = player.y + player.height;
				player.left = player.x;
				player.right = player.x + player.width;

				ball.top = ball.y - ball.radius;
				ball.bottom = ball.y + ball.radius;
				ball.left = ball.x - ball.radius;
				ball.right = ball.x + ball.radius;

				return (ball.right > player.left && ball.left < player.right && ball.top < player.bottom && ball.bottom > player.top);
			},

			render(){
				this.drawRect(0,0,this.width,this.height,"black");
				this.drawNet(); 
				this.drawRect(this.user.x, this.user.y, this.user.width, this.user.height, this.user.color);
				this.drawRect(this.com.x, this.com.y, this.com.width, this.com.height, this.com.color);
				
				this.drawCircle(this.ball.x,this.ball.y,this.ball.radius,this.ball.color);
				this.drawText(this.user.score, this.width/4, this.height/5, this.user.color);
				this.drawText(this.com.score, 3*this.width/4, this.height/5, this.user.color);
			},

			movePaddle(e){
				let rect = this.canvas.getBoundingClientRect();
				this.user.y = e.clientY - rect.top - this.user.height/2;
			},

			computerResponse(){
				this.com.y += (this.ball.y - (this.com.y + this.com.height/2)) * this.computerLevel;
			},

			play(){
				setInterval(()=>{this.game();}, 1000/this.framePerSec);
			},

			drawRect(x,y, width, height, color){
				this.context.fillStyle = color;
				this.context.fillRect(x, y, width, height);
			},

			drawCircle(x,y,radius,color){
				this.context.fillStyle = color;
				this.context.beginPath();
				this.context.arc(x, y, radius, 0, Math.PI*2, false);
				this.context.closePath();
				this.context.fill();
			},

			drawText(text,x,y,color){
				this.context.fillStyle = color;
				this.context.font="70px monospace";
				this.context.fillText(text, x, y);
			},

			drawNet(){
				for(let i = 0; i < this.height; i+=45)
				{
					this.drawRect(this.net.x,this.net.y + i,this.net.width,this.net.height,this.net.color);
				}
			}
		}
	}
</script>

<style>
	.border{
		border:1px solid black;
		background: black;
	}
</style>