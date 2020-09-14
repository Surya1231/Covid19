<?php include("header.php"); ?>
<title>GoGreen</title>
<link rel="stylesheet" href="css/helplines.css">
<link rel="stylesheet" href="css/footer2.css">
</head>
<body>

<?php include("topbar.php") ?>

<div id="info">
      <div class="topmenu">
        <div class="containermain"> </div>
        <div class="centered1">Deceased Plot</div>
        <br>
        <br>
        <div class="centered2"></div>
      </div>

      <div class="container">
        <h1>Plot</h1>
      </div>



</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

      <script type="text/javascript">
      // $(document).ready(function () {
      //     showGraph();
      // });

      showGraph();
      function showGraph()
      {
        $.ajax({ type: "GET",
           url: "getData.php",
           async: false,
           success : function(data)
           {
              console.log(data);
           }
      });
      }
      </script>
</div>

<?php include('footer2.php')?>
