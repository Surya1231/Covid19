<?php include("header.php"); ?>
<title>Covid19</title>
<link rel="stylesheet" href="css/helplines.css">
<link rel="stylesheet" href="css/footer2.css">
</head>
<body>

<?php include("topbar.php") ?>
<div id="info">
      <div class="topmenu">
        <div class="containermain"> </div>
        <div class="centered1">Covid19 Helpline</div>
        <br>
        <br>
        <div class="centered2">Contact helpline number information for all the States and Union Territories. Don't hesitate to ask for help or guidance!!</div>
      </div>

      <br>

      <div class="container">
        <table id="contacts" class="table table-striped table-bordered"></table>
      </div>



</div>

      <script type="text/javascript">

          async function getapi(url) {

              // Storing response
              const response = await fetch(url);

              // Storing data in form of JSON
              var data = await response.json();
              console.log(data);
              show_contacts(data);
          }

          function show_contacts(data) {
              let tab =
                  `<tr>
                  <th>#</th>
                    <th>State</th>
                    <th>Contact Details</th>
                   </tr>`;

              // Loop to access all rows
              let count = 1;
              for (let r of data["data"]["contacts"]["regional"]) {
                  tab += `<tr>
                  <td>${count++} </td>
              <td>${r.loc} </td>
              <td>${r.number}</td>
          </tr>`;
              }
              // Setting innerHTML as tab variable
              document.getElementById("contacts").innerHTML = tab;
          }

          getapi("https://api.rootnet.in/covid19-in/contacts");

      </script>
</div>

<?php include('footer2.php')?>
