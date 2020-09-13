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
        <div class="centered1">Hospital Dashboard</div>
        <br>
        <br>
        <div class="centered2">Find all the information on rural and urban hospitals & beds information for all the states and Union Territories.</div>
        <div class="bottom-center">
            <div class="tablinks selectedtab" onclick="function1(event,'hospitals')"> <div class="vertical"> Hospital & Beds </div>  </div>
            <div class="tablinks" onclick="function1(event,'colleges')"> <div class="vertical"> Medical Colleges & Beds </div>  </div>
            <div class= "clear"></div>
        </div>
      </div>

      <br>

      <div class="container">
        <div class="subcontent" id="hospitals">
          <table id="hospitalbeds" class="table table-striped table-bordered"></table>
        </div>

        <div class="subcontent" id="colleges">
          <input type="text" id="stateFilter" onkeyup="filterMedicalColleges()" placeholder="Enter State Name">
          <input type="text" id="typeFilter" onkeyup="filterMedicalColleges()" placeholder="Enter Ownership Type">
          <br>
          <table id="medicalcolleges" class="table table-striped table-bordered"></table>
        </div>
      </div>



</div>

      <script type="text/javascript">

      document.getElementsByClassName("tablinks")[0].click();
      function function1(event,id){

         var i, subcontent, sublinks;
         subcontent = document.getElementsByClassName("subcontent");
         sublinks = document.getElementsByClassName("tablinks");


         for (i = 0; i < subcontent.length; i++) {
            subcontent[i].style.display = "none";
          }

          for (i = 0; i < sublinks.length; i++) {
            sublinks[i].className = sublinks[i].className.replace(" selectedtab", "");
          }

          console.log(id);
          document.getElementById(id).style.display = "block";
          event.currentTarget.className += " selectedtab";
      }

      const api_url_hospitalbeds =  "https://api.rootnet.in/covid19-in/hospitals/beds";
      const api_url_medicalcolleges =  "https://api.rootnet.in/covid19-in/hospitals/medical-colleges";

      async function getapi(url, type) {
        const response = await fetch(url);
        var data = await response.json();
        console.log(data);
        if(type == "hospitalbeds")
          show_hospitalbeds(data);
        else if(type == "medicalcolleges")
          show_medicalcolleges(data);
        }

        function show_hospitalbeds(data) {
            let tab =
                `<tr>
                  <th>State</th>
                  <th>Rural Hospitals</th>
                  <th>Rural Beds</th>
                  <th>Urban Hospitals</th>
                  <th>Urban Beds</th>
                  <th>Total Hospital</th>
                  <th>Total Beds(State-wise)</th>
                 </tr>`;

            // Loop to access all rows
            for (let r of data["data"]["regional"]) {
                tab += `<tr>
            <td>${r.state} </td>
            <td>${r.ruralHospitals}</td>
            <td>${r.ruralBeds}</td>
            <td>${r.urbanHospitals}</td>
            <td>${r.urbanBeds}</td>
            <td>${r.totalHospitals}</td>
            <td>${r.totalBeds}</td>
        </tr>`;
            }
            // Setting innerHTML as tab variable
            document.getElementById("hospitalbeds").innerHTML = tab;
        }

        function show_medicalcolleges(data) {
            let tab =
                `<tr>
                  <th>State</th>
                  <th>Institute Name</th>
                  <th>City</th>
                  <th>Type</th>
                  <th>Admission Capacity</th>
                  <th>Hospital Beds</th>
                 </tr>`;

            // Loop to access all rows
            for (let r of data["data"]["medicalColleges"]) {
                tab += `<tr>
            <td>${r.state} </td>
            <td>${r.name}</td>
            <td>${r.city}</td>
            <td>${r.ownership}</td>
            <td>${r.admissionCapacity}</td>
            <td>${r.hospitalBeds}</td>
        </tr>`;
            }
            // Setting innerHTML as tab variable
            document.getElementById("medicalcolleges").innerHTML = tab;
        }

        function filterMedicalColleges() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          inputType = document.getElementById("typeFilter");
          filterType = inputType.value.toUpperCase();
          inputState = document.getElementById("stateFilter");
          filterState = inputState.value.toUpperCase();
          table = document.getElementById("medicalcolleges");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            tdState = tr[i].getElementsByTagName("td")[0];
            tdType = tr[i].getElementsByTagName("td")[3];
            if (tdType || tdState) {
              txtValueState = tdState.textContent || tdState.innerText;
              txtValueType = tdType.textContent || tdType.innerText;
              if (txtValueType.toUpperCase().indexOf(filterType) > -1 && txtValueState.toUpperCase().indexOf(filterState) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }

        getapi(api_url_hospitalbeds, "hospitalbeds");
        getapi(api_url_medicalcolleges, "medicalcolleges");

      </script>
</div>

<?php include('footer2.php')?>
