<?php  
 include 'connection.php';  
 $query = "SELECT Q2, count(*) as number FROM food GROUP BY Q2";  
 $result = mysqli_query($conn, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title> 
		   <style>
		   body{
			   background-image:url('statsbg.gif');
			   background-repeat: no-repeat;
			   background-attachment: fixed;
               background-position:right top;
		   }
		   </style>		   
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Q2', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Q2"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'What is your favorite type of food?',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
<h1>Get Statistics<h1>

<form action="chart_foQ1.php">
<button type="submit">Q1</button></form>
<form action="chart_foQ2.php">
<button type="submit">Q2</button></form>
<form action="chart_foQ3.php">
<button type="submit">Q3</button></form>
<form action="chart_foQ4.php">
<button type="submit">Q4</button></form>
<form action="chart_foQ5.php">
<button type="submit">Q5</button></form>
<form action="chart_foQ6.php">
<button type="submit">Q6</button></form>
<form action="chart_foQ7.php">
<button type="submit">Q7</button></form>
<form action="chart_foQ8.php">
<button type="submit">Q8</button></form>
<form action="chart_foQ9.php">
<button type="submit">Q9</button></form>
<form action="chart_foQ10.php">
<button type="submit">Q10</button></form>

           <div style="width:900px;">   
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>    
      </body>  
 </html>  