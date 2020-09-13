<?php include("header.php"); ?>
<title> Covid19 </title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer2.css">
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
</head>
<body>
<?php include('topbar.php');?>

<div class="img">
  <img src="images/bg_header.jpg" width="100%" height="780px;">
  <div class="bigcenter">
    <div class="centered"> Covid 19 </div>
      <div id="bottom-quote" class="centered2">
        <script>
          var quote = "";
          var xhttp = new XMLHttpRequest();
          xhttp.open("GET", "https://quota.glitch.me/random", true); 
          xhttp.send(null);
          xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              quote = new String(xhttp.responseText);
              var p = JSON.parse(xhttp.responseText);
              $('#rand-quote').text('"' + p["quoteText"]+ '"');
              $('#rand-author').text("- " +p["quoteAuthor"]);
            }
          };
        </script>
        <div class="blockquote text-black" id="rand-quote" ></div> </div>
      <div class="centered3">  <div class="blockquote text-black" id="rand-author" ></div>
      </div>
  </div>


      <div class="container">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
        <span class="text" style="color: black">Scroll down</span>
      </div>
</div>

<div id="index">
    <div>
      <br>
      <h2> Covid19 India </h2>
    </div>
    <br>

    <div class="main row">
<<<<<<< HEAD
        <div id='map' style='height:700px;' class="col-md-9">
        <script>
          var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
          var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';
          var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});
          var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=_TOKEN_ID_";
          var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';
          var  waqiLayer  =  L.tileLayer(WAQI_URL);
          var map  =  L.map('map').setView([21.9124,  80.7873],  5);
          map.addLayer(osmLayer).addLayer(waqiLayer);
        </script>
      </div>

      <div class="data col-md-3">
          <div class="data1">
            <div class="left">
              <b>AQI</b>
            </div>
            <div class="right">
              <b>Air Pollution Level</b>
            </div>
          </div>
          <div class="data2">
            <div class="left">
              0 - 50
            </div>
            <div class="right">
              Good
            </div>
          </div>
          <div class="data3">
            <div class="left">
              51 -100
            </div>
            <div class="right">
              Moderate
            </div>
          </div>
          <div class="data4">
            <div class="left">
              101-150
            </div>
            <div class="right">
              Unhealthy for Sensitive Groups
            </div>
          </div>
          <div class="data5">
            <div class="left">
              151-200
            </div>
            <div class="right">
              Unhealthy
            </div>
          </div>
          <div class="data6">
            <div class="left">
              201-300
            </div>
            <div class="right">
              Very Unhealthy
            </div>
          </div>
          <div class="data7">
            <div class="left">
              300+
            </div>
            <div class="right">
              Hazardous
            </div>
          </div>
      </div>

=======
    <iframe src="https://www.trackcorona.live/map" style="width:100%;" > </iframe>
>>>>>>> 245e4e2b531e3e6fd66d40046845d4815bfb17f3
  </div>
</div>
<br>

<div class="recent">
  <br>
<<<<<<< HEAD
  <h3 style="text-align:center; font-weight:bold"> Notifications Panel</h3>
  <div class="row innerbox">
    <div class="col-md-8">
      <div class="scrollbox shadow-lg p-3 mb-5 rounded " >
        <marquee direction="up" height="100%" scrolldelay="200" id="nnews">
            <!-- <li> Suryaprakash Agarwal Donated Rs 20000 to the GoGreen Box. Cheers to Him!</li>
            <li> GoGreen sponsored Energy Club to distribute 50 solar lamps in unelectrified villages. </li>
            <li> Tesla promised investment of Rs 1 crore for 1 million tree plantations. </li>
            <li> Anmol Mittal Donatated Rs 10 to GoGreen Box. Cheers to Him!</li>
            <li> Keshav Sarraf requested Rs 3000 for seminar on renewable sources of energy.</li>
            <li> GoGreen joined hands with Greenify for plantation of 1 million tree.</li>
            <li> GoGreen funded Simpura village to build compost pits. </li>
            <li> Suryaprakash Agarwal Donated Rs 2000 to the GoGreen Box. Cheers to Him!</li>
            <li> GoGreen sponsored Energy Club to distribute 50 solar lamps in unelectrified villages. </li>
            <li> Tesla promised investment of Rs 1 crore for 1 million tree plantations. </li>
            <li> Anmol Mittal Donatated Rs 10 to GoGreen Box. Cheers to Him!</li>
            <li> Keshav Sarraf requested Rs 3000 for seminar on renewable sources of energy.</li>
            <li> GoGreen joined hands with Greenify for plantation of 1 million tree.</li>
            <li> GoGreen funded Simpura village to build compost pits. </li> -->
=======
  <h3 style="text-align:center; font-weight:bold ; color:white"> Notifications Panel</h3>
  <div class="row innerbox">
    <div class="col-md-12">
      <div class="scrollbox shadow-lg p-3 mb-5 rounded " >
        <marquee direction="up" height="100%" scrolldelay="200" id="nnews">
            
>>>>>>> 245e4e2b531e3e6fd66d40046845d4815bfb17f3
        </marquee>
      </div>
      <script type="text/javascript">

        async function getapi(url) {
<<<<<<< HEAD
            // Storing response
=======
>>>>>>> 245e4e2b531e3e6fd66d40046845d4815bfb17f3
            const response = await fetch(url);

            // Storing data in form of JSON
            var data = await response.json();
            console.log(data);
            for (let r of data["data"]["notifications"].slice(1)){
              $("#nnews").append("<a target='_blank' href='"+r.link+"'><li>"+r.title.substring(10)+"("+r.title.substring(0, 10)+")"+"</li></a>");
            }
        }
        getapi("https://api.rootnet.in/covid19-in/notifications");

      </script>
    </div>
<<<<<<< HEAD
    <div class="weather col-md-4">
      <div id="ml_c5773511"><div style="padding:0;margin:0;" id="ml_c5773511_i" v='1.1' a='{"t":"a","lang":"en","ids":["2907"],"a_bg":"#FFFFFF","a_br_c":"#43A047","a_n_b":"#43A047","a_icon":"#FFFFFF00","a_con":"#43A047","a_inter":"#FFFFFF00","a_n_c":"#FFFFFF","a_icon_color":"#000000","a_con_c":"#FFFFFF","a_int_h_color":"#000000","a_int_temp_color":"#000000","a_st":"celsius"}'></div><div id="ml_c5773511_c" style="padding:0;margin:0;padding:7px 5px;"><img src="https://weatherlabs.in/assets/img/logo_z_b.svg" style="width:15px;opacity:0.7;margin-right:5px;position:relative;top:1px;display:inline-block;"><a href="https://weatherlabs.in/jaipur/today/" style="color:grey;font-size:12px;text-decoration:none;" target="_blank" id="ml_c5773511_u">Weather Today</a></div></div><script async src="https://app.weatherlabs.in/js/?id=ml_c5773511"></script>
        <div class="" style="clear:both">
    </div>
=======
>>>>>>> 245e4e2b531e3e6fd66d40046845d4815bfb17f3
  </div>

  <br><br>
</div>
</div>
<?php include('footer2.php') ?>
