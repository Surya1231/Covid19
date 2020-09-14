<?php include("header.php"); ?>
<title>Covid19</title>
<link rel="stylesheet" href="css/info.css">
<link rel="stylesheet" href="css/footer2.css">
</head>
<body>

<?php include("topbar.php") ?>
<div id="info">
      <div class="topmenu">
        <div class="containermain"> </div>
        <div class="centered1">The Race to Find COVID-19 Vaccine</div>
        <!-- <div class="centered2">Every info you need to know!!</div> -->
        <div class="bottom-center">
            <div class="tablinks selectedtab" onclick="function1(event,'doctors')"> <div class="vertical"> Measures </div>  </div>
            <div class="tablinks" onclick="function1(event,'treatment')"> <div class="vertical"> WHO </div>  </div>
            <!-- <div class="tablinks" onclick="function1(event,'hospitals')"> <div class="vertical"> Standards </div>  </div> -->
            <div class= "clear"></div>
        </div>
      </div>

       <div id="doctors" class="subcontent">
         <div class="treat">
           <div class="flex-container">
             <div class="xx">
               <div class="uppper">
                 <h5>CoronaVirus Prevention</h5>
                 <img src="images/measure1.jpg" width="380" height="220">
               </div>
               <div class="lower">
                 <h6><b>5 Things to do in 2020 to help reduce virus prevention</b></h6>
                 <br>
                 <ul>
                   <li>Avoid Unnecessary moving out</li>
                   <li>Wash your hands regularly</li>
                   <li>Keep disinfectant</li>
                   <li>Maintain Social Distance</li>
                   <li>Regularly check symptoms of Covid</li>
                 </ul>
                 <br>
                 <h5>TRIP THE CHAIN OF CORONA VIRUS</h5>
               </div>
             </div>
             <div class="xx">
               <div class="uppper">
                 <h5>IMPORTANT MEASURES</h5>
                 <img src="images/measure2.png" width="380" height="220">
               </div>
               <div class="lower">
                 <h6><b>5 Minimum control measures</b></h6>
                 <br>
                 <ul>
                   <li>Clean Your Hands often</li>
                   <li>Avoid Touching Eyes, Nose and Mouth</li>
                   <li>Maintain good immune system</li>
                   <li>Avoid Contact with someone who has symptoms of Covid-19</li>
                   <li>Good Housekeeping</li>
                 </ul>
                 <br>
               </div>
             </div>
             <div class="xx">
               <div class="uppper">
                 <h5>TRAVEL ADVISORY</h5>
                 <img src="images/measure3.png" width="380" height="220">
               </div>
               <div class="lower">
                 <h6><b>4 control measures</b></h6>
                 <br>
                 <ul>
                   <li>Don't Travel if you have any symptoms.</li>
                   <li>Respect safe physical distancing</li>
                   <li>Wear facial coverings</li>
                   <li>Follow 14 day quarantine period before and after travel</li>
                 </ul>
                 <br>
               </div>
             </div>
             <div class="xx">
             </div>
             </div>
           </div>
        </div>

         <div id="treatment" class="subcontent" style="display: none;">
           <div class="treat text-align-center">
             <a href="https://www.who.int/" class="btn btn-primary text-align-center" style="position:relative; left: 45%;"> Jump to Who.int </a>
          </div>
         </div>

        <!-- <div id="hospitals" class="subcontent" style="display: none">
          <div class="treat">
            <div id="iimg1"></div>
            <div id="iimg2"></div>
            <div id="iimg3"></div>
         </div>
       </div> -->

      </div>

      <script type="text/javascript">
      document.getElementsByClassName("tablinks")[2].click();
        function function1(event,id){

           var i, subcontent, sublinks;
                 subcontent = document.getElementsByClassName("subcontent");
                  sublinks = document.getElementsByClassName("tablinks");


                 for (i = 0; i < subcontent.length; i++) {
                    subcontent[i].style.display = "none";
                   }

                   for (i = 0; i < sublinks.length; i++) {
                     sublinks[i].className = sublinks[i].className.replace("selectedtab", "");
                    }
                    console.log(id);
                    document.getElementById(id).style.display = "block";
                    event.currentTarget.className += " selectedtab";

        }
      </script>
</div>

<?php include('footer2.php')?>
