
<?php
 session_start();

$dbhandle = new mysqli('127.0.0.1', 'root', '','naturalist');
echo $dbhandle->connect_error;

$query = "SELECT  type, count(type)  FROM sujet  group by type";
$res = 	$dbhandle->query($query);

?>




 <?php require 'header.php'; ?>
    <!-- Side Navbar -->
    <?php require 'sideNavBar.php'?>
    <?php require 'topHeader.php';?>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">afficher statistiques</li>
          </ul>
        </div>
      </div>
    

     
      <div id="piechart">  </div>


 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		
		['type','type'],
         <?php
		 
		 //fetch_assoc(): lit une ligne de résultat MySql dans un tableau associatif //
		 
		 while ($row=$res->fetch_assoc()) {
			 
			 echo "['".$row['type']."',".$row['count(type)']."],"; 
			 
		 }
		 
		 
		 
		 
		 ?>
        ]);

        var options = {
          title: 'Statistiques sur sujet',
		     is3D:true, 'width':550, 'height':400
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  
   <?php require './footer.php';?>