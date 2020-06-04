
<?php
require_once('db.php');

  $sql = "SELECT * FROM daily_income WHERE date ='2020-5-10'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $a=0;
    
     
    while($row = $result->fetch_assoc()) { $a=$a+$row['income'];}}
    
$sql = "SELECT * FROM daily_income WHERE date ='2020-5-11'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $b=0;
    
     
    while($row = $result->fetch_assoc()) { $b=$b+$row['income'];}}    
    
    
    
$sql = "SELECT * FROM daily_income WHERE date ='2020-5-12'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $c=0;
    
     
    while($row = $result->fetch_assoc()) { $c=$c+$row['income'];}}






$sql = "SELECT * FROM daily_income WHERE date ='2020-5-13'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $d=0;
    
     
    while($row = $result->fetch_assoc()) { $d=$d+$row['income'];}}



$sql = "SELECT * FROM daily_income WHERE date ='2020-5-14'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $e=0;
    
     
    while($row = $result->fetch_assoc()) { $e=$e+$row['income'];}}



$sql = "SELECT * FROM daily_income WHERE date ='2020-5-15'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $f=0;
    
     
    while($row = $result->fetch_assoc()) { $f=$f+$row['income'];}}


$sql = "SELECT * FROM daily_income WHERE date ='2020-5-16'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $g=0;
    
     
    while($row = $result->fetch_assoc()) { $g=$g+$row['income'];}}



$sql = "SELECT * FROM daily_income WHERE date ='2020-5-17'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $h=0;
    
     
    while($row = $result->fetch_assoc()) { $h=$h+$row['income'];}}







$sql = "SELECT * FROM daily_income WHERE date ='2020-5-18'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $i=0;
    
     
    while($row = $result->fetch_assoc()) { $i=$i+$row['income'];}}






$sql = "SELECT * FROM daily_income WHERE date ='2020-5-19'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $j=0;
    
     
    while($row = $result->fetch_assoc()) { $j=$j+$row['income'];}}




$sql = "SELECT * FROM daily_income WHERE date ='2020-5-20'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $k=0;
    
     
    while($row = $result->fetch_assoc()) { $k=$k+$row['income'];}}



$sql = "SELECT * FROM daily_income WHERE date ='2020-5-21'";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $l=0;
    
     
    while($row = $result->fetch_assoc()) { $l=$l+$row['income'];}}

echo "
  


  <script>
		var lineChartData = {
			labels: ['2020-05-10', '2020-05-11', '2020-05-12', '2020-05-13', '2020-05-14', '2020-05-15', '2020-05-16', '2020-05-17', '2020-05-18', '2020-05-19', '2020-05-20', '2020-05-21'],
			datasets: [{
				label: 'company income',
				borderColor: window.chartColors.red,
				backgroundColor: window.chartColors.red,
				fill: false,
			data: [$a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l],
				yAxisID: 'y-axis-1',
			},]
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = Chart.Line(ctx, {
				data: lineChartData,
				options: {
					responsive: true,
					hoverMode: 'index',
					stacked: false,
					title: {
						display: true,
						text: 'Sale report in 12 days'
					},
					scales: {
						yAxes: [{
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'left',
							id: 'y-axis-1',
						}, {
							type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
							display: true,
							position: 'right',
							id: 'y-axis-2',

							// grid line settings
							gridLines: {
								drawOnChartArea: false, // only want the grid lines for one axis to show up
							},
						}],
					}
				}
			});
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			lineChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myLine.update();
		});
	</script>
 


      ";
    
    ?>