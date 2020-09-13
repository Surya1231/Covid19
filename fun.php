<?php include("header.php"); ?>
<title>Nature.ly</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer2.css">
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
<style media="screen">
  #topbar{
    position: relative !important;
  }
  #fun {
    width: 90%;
    margin: auto;
    height: auto;
  }

  #fun .class1{
    text-align: center;
    padding-top: 100px;
    padding-bottom: 0;
  }

  .game{
    padding-top: 20px;
    padding-bottom: 30px;
    text-align: center;
  }

  .gamebox{
    padding: 50px;
  }
  .gaam{
    width: 80%;
    margin: auto;
    overflow: hidden;
  }

  iframe {
    overflow-y: hidden;
  }
  body {
    padding-bottom: 0px;
    background-image:  url("images/funbg.jpg");
    background-size: contain;
    color: white;
  }
</style>
</head>
<body>
<?php include('topbar.php');?>

<div id="fun">
  <!-- <div class="class1">
    <h1> Proceed to Alexa Skill : <a href="#"> Green Mafia </a></h1><br><br><hr>
    <h1> <br> Proceed to Alexa Skill :<a href="#">  Know Your Green Surrooundings </a><br><br></h1><hr>
  </div> -->
  <div class="row" style="width:90%; margin:auto;">
    <div class="col-md-4 gamebox" style="text-align:center;">
      CROSSWORD
      <img src="images/cross.jfif" width="100%" height="300px" onclick="func('https://www.englishmaven.org/HP6/Crossword%20Puzzle%20-%20The%20Environment.htm','Crossword')">
    </div>
    <div class="col-md-4 gamebox" style="text-align:center;">
      ENERGY CONSERVATION TIPS
      <img src="images/energy2.jpg" width="100%" height="300px" onclick="func('http://www.olliesworld.com/club/gamehouse.htm', 'Energy conservation game')">
    </div>
    <div class="col-md-4 gamebox" style="text-align:center">
      CORAL REEF
      <img src="https://tinybop.com/img/apps/coral-reef/Module-2.png" width="100%" height="300px" onclick="func('https://tinybop.com/apps/coral-reef', 'Coral Reef')">
    </div>

  </div>
  <hr>
  <div class="game">
    <h1 id = "ihead"> Select a game to play here </h1><br>
    <div class="gaam">
      <iframe id="iframe" src="" width="100%" height="700px"></iframe>
    </div>
    <hr>
  </div>


</div>


<script type="text/javascript">
window.smoothScroll = function(target) {
  var scrollContainer = target;
  do { //find scroll container
      scrollContainer = scrollContainer.parentNode;
      if (!scrollContainer) return;
      scrollContainer.scrollTop += 1;
  } while (scrollContainer.scrollTop == 0);

  var targetY = 0;
  do { //find the top of target relatively to the container
      if (target == scrollContainer) break;
      targetY += target.offsetTop;
  } while (target = target.offsetParent);

  scroll = function(c, a, b, i) {
      i++; if (i > 30) return;
      c.scrollTop = a + (b - a) / 30 * i;
      setTimeout(function(){ scroll(c, a, b, i); }, 20);
  }
  // start scrolling
  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

  function func(url, title){
    document.getElementById("ihead").textContent = title;
    var p = document.getElementById('iframe').src = url;
    console.log(p);
    smoothScroll(document.getElementById('ihead'));
  }
</script>
<?php include('footer2.php'); ?>
