<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    div#board{
  background: #CCC;
  border: #999 1px solid;
  width: 1080px;
  height: 540px;
  padding: 24px;
  margin: 0px auto;
  z-index: -100;
    }
  div#board > div{
  background:url(59453237_p0_master1200.jpg) no-repeat;
  border: #000 1px solid;
  width:71px;
  height:71px;
  float:left;
  margin:10px;
  padding:20px;
  font-size:64px;
  cursor: pointer;
  text-align: center;
  z-index: -100;
  }
  div#score1{
  font-size: 40px;
  float: left;
  overflow: hidden;
  position: absolute;
  }

  div#score2{
  font-size: 40px;
  overflow: hidden;
  }


</style>
</head>
<?php
$score1= "0";
$score2= "0";
 ?>
<script>
    var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','I','I','J','J','K','K','L','L','M','M','N',
                        'N','O','O','P','P','Q','Q','R','R',];
    var memory_value = [];
    var memory_tile_ids = [];
    var tiles_flipped = 0;
    var score1 = 0;
    var score2 = 0;
    var playerturn;
    Array.prototype.tile_shuffle = function () {
    var s = this.length, c, temp;
    while (--s > 0) {
    c = Math.floor(Math.random() *(s+1));
    temp = this[c];
    this[c] = this[s];
    this[s] = temp;
      }
}
//*CREATES A BOARD, WENHAO*
function newboard(){
  tiles_flipped = 0;
  var output = '';
  memory_array.tile_shuffle();
  for (var s = 0; s < memory_array.length; s++){
    output += '<div id="tile_'+s+'" onclick="memory_flip_tile(this,\''+memory_array[s]+'\') "></div>';
  }
  document.getElementById('board').innerHTML= output;
}
// FLIPS CARDS,WENHAO
function memory_flip_tile(tile,value){
  if (tile.innerHTML == "" && memory_value.length < 2) {
    tile.style.background = '#FFF';
    tile.innerHTML = value;
    if (memory_value.length == 0) {
      memory_value.push(value);
      memory_tile_ids.push(tile.id);
    }else if (memory_value.length == 1) {
      memory_value.push(value);
      memory_tile_ids.push(tile.id);
      //COMPARE IF THE SAME GET A POINT, WENHAO
      if (memory_value[0] == memory_value[1]) {
          tiles_flipped +=2;
          score_update();
        //CLEARING THEM ARRAYS , WENHAO
        memory_value = [];
        memory_tile_ids = [];
        //SET BACK CARD IF THEY ARE NOT THE SAME, WENHAO
      }else {
          function resetting(){
            var tile_1 = document.getElementById(memory_tile_ids[0]);
            var tile_2 = document.getElementById(memory_tile_ids[1]);
            tile_1.style.background = 'url(59453237_p0_master1200.jpg) no-repeat';
            tile_1.innerHTML = "";
            tile_2.style.background = 'url(59453237_p0_master1200.jpg) no-repeat';
            tile_2.innerHTML = "";
            memory_value = [];
            memory_tile_ids = [];
            //CHANGES COLOR OF THE PLAYER (WHO HAS A TURN), WENHAO
          }   switch (playerturn){
              case 1:
              playerturn = 2;
              document.getElementById("player1").style.color = "black";
              document.getElementById("player2").style.color = "red";
              break;
              case 2:
              playerturn = 1;
              document.getElementById("player1").style.color = "red";
              document.getElementById("player2").style.color = "black";
              break;
            }
            //THE TIME IT TAKES FOR A CARD TO GET RESET, WENHAO
        setTimeout(resetting, 700);
        //CHECKING FOR A COMPLETED BOARD , WENHAO
        if (tiles_flipped == memory_array.length) {
          alert("you've matched them all good job,the page will refresh after you press on ok")
          document.getElementById('board').innerHTML= "";
          location.href = 'http://wenhaoportal.hopto.org/memory%20game/2player32.php';
          }
        }
      }
    }
  }
  //SHOULD BE WHAT DETERMINES WHO GOES FIRST BUT I REALISED THAT I DIDNT KNOW HOW TO INPLEMENT IT CORRECTLY, WENHAO
  //IF THIS IS GONE IT WILL ONLY BE PLAYER 2 HAVING A TURN,WENHAO
  //IF ITS THERE PLAYER 1 GOES FIRST BUT IT SWITCHES BETWEEN THEM,WENHAO
  function turn(){
    var rng = Math.floor(Math.random() * 6) + 1;

      if (rng=1,3,5) {
        playerturn = 1;
      } else if (rng=2,4,6) {
        playerturn = 2;
      }
      if (playerturn == 1) {
        document.getElementById("player1").style.color="red"
      }else {
        document.getElementById("player2").style.color="red"
      }
  }

  //UPDATES THE SCORE,WENHAO
  function score_update() {
    if (playerturn == 1) score1++;
    else score2++;

    document.getElementById("score1").innerHTML = score1;
    document.getElementById("score2").innerHTML = score2;
  }
</script>
