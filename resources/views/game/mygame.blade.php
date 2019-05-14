
<!-- Design and developed by Sushil Kshetri -->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="Content/337bootstrap.min.css">
  <link rel="stylesheet" href="Content/mycss.css">
  <title>Lookup Game</title>
  <style>
  canvas{

  }
  </style>
</head>
<body style="background:#344156">
  <div class="container-fluid" style="background:#286090">
    <div class="row">
      <div class="col-md-4">
        <a href="{{URL::to('/')}}"><h2  class="glyphicon glyphicon-home" style="margin:12px 12px;color:red"></h2></a>
      </div>
      <div class="col-md-4">
        <center>
          <h1 style="color:white;margin:12px 12px">LOOKUP</h1>
        </center>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <!--alt_host_nav end -->
  </br>


<center>
<canvas id="cv" width="1000" height="530">
<p>Your browser does not support the canvas</p>
</canvas><br> </br>
  <select id="Difficulty" class="btn btn-primary">
    <option value="Easy">Easy</option>
    <option value="Middle">Medium</option>
    <option value="Hard">Hard</option>
  </select>
  &nbsp;&nbsp;
<button onclick="degree()" class="btn btn-warning">Restart</button>
  &nbsp;&nbsp;
  <button type="button" onclick="stop()" name="stop" class="btn btn-danger">Stop</button>
</center>
<div style="visibility:hidden">
<audio controls autoplay loop>
    <source src="audio/song1.mp3">
</audio>
<script type="text/javascript" src="Scripts/331jquery.min.js"></script>
<script type="text/javascript" src="Scripts/337bootstrap.min.js"></script>
<script>
var difficulty=document.getElementById('Difficulty'),h=1;
function degree(){
        h =difficulty.selectedIndex+1;
        refresh();
}
function stop() {
 alert("You clicked on stop !!");
}
var c = document.getElementById("cv");
var cv = c.getContext("2d");
var x=400,y=400,U=10;
var _vitesse=[10,10,10,10,10,10,10,10,10,
              10,10,10,10,10,10,10,10,10];
var score=0,z=0;
var _taille=[];
var lt = 0,jump;
var yp=350,bool=false,he=5,s=0;
function refresh(){
     score=0;yp=350;he=5;
    _vitesse=[10,10,10,10,10,10,10,10,10,
              10,10,10,10,10,10,10,10,10];
}

document.onmousedown=function(e){
     bool=true;he=4;
jump=setInterval(function(){
        if(bool){
                  if(yp >0){
                       if(he>0){he-=0.1;}
                       else{bool=false}
                       yp-=he;
                  }

        }
    },10);
}
document.onmouseup=function(e){
    clearInterval(jump,10);
     bool=false;
}
setInterval(function(){
    lt = Math.floor(Math.random()*100+200);
    z++;if(z<19)_taille.push(lt);
    cv.fillStyle="#344156";
    cv.fillRect(0,0,1000,550);
    for(var i=1;i<_vitesse.length;i++){
        cv.fillStyle="black";
        cv.fillRect(y+i*50+_vitesse[i],0,20,_taille[i]);
        cv.fillRect(y+i*50+_vitesse[i],_taille[i]+200,20,600-_taille[i]);
        if((y+i*50+_vitesse[i])<(-50)){
         _vitesse[i]=18*50+_vitesse[_vitesse.length-1]-50;
        }
        _vitesse[i]-=h/2;
        if((yp<_taille[i] || yp>_taille[i]+200) && y+i*50+_vitesse[i]>90 && y+i*50+_vitesse[i] < 140){
           cv.fillStyle="black";
           cv.fillRect(0,0,1000,550);
           alert('Game over \nYour Score : '+score);
           refresh();

        } else if((yp>_taille[i] && yp<_taille[i]+200) && y+i*50+_vitesse[i]>100 && y+i*50+_vitesse[i] < 120){
            score+=1;
        }
            cv.fillStyle="red";
            cv.fillRect(y+i*50+_vitesse[i],_taille[i],20,3);
            cv.fillRect(y+i*50+_vitesse[i],_taille[i]+200,20,3);
    }
    if(!bool && yp <530){
       yp+=he/5;he+=0.2;
    }
    cv.fillStyle="#10167f";
    cv.beginPath();
    cv.arc(100,yp,20,0,Math.PI*2);
    cv.fill();
    cv.fillStyle="green";
    cv.fillRect(590,20,210,40);
    cv.font="30px calibri";
    cv.fillStyle="white";
    cv.fillText("Score :"+score,600,50);
},2);

</script>
</body>
</html>
