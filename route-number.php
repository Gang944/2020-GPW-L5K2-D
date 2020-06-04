<?php
require_once('db.php');

  $sql = "SELECT * FROM ticket_no WHERE Route_no = 1";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $a=0;
    
     
    while($row = $result->fetch_assoc()) { $a=$a+$row['number'];}}
    
$sql = "SELECT * FROM ticket_no WHERE Route_no =2";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $b=0;
    
     
    while($row = $result->fetch_assoc()) { $b=$b+$row['number'];}}    
    
    
    
$sql = "SELECT * FROM ticket_no WHERE Route_no = 3";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $c=0;
    
     
    while($row = $result->fetch_assoc()) { $c=$c+$row['number'];}}






$sql = "SELECT * FROM ticket_no WHERE Route_no = 4";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $d=0;
    
     
    while($row = $result->fetch_assoc()) { $d=$d+$row['number'];}}



$sql = "SELECT * FROM ticket_no WHERE Route_no = 5";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $e=0;
    
     
    while($row = $result->fetch_assoc()) { $e=$e+$row['number'];}}



$sql = "SELECT * FROM ticket_no WHERE Route_no = 6";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $f=0;
    
     
    while($row = $result->fetch_assoc()) { $f=$f+$row['number'];}}


$sql = "SELECT * FROM ticket_no WHERE Route_no = 7";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $g=0;
    
     
    while($row = $result->fetch_assoc()) { $g=$g+$row['number'];}}



$sql = "SELECT * FROM ticket_no WHERE Route_no = 8";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $h=0;
    
     
    while($row = $result->fetch_assoc()) { $h=$h+$row['number'];}}







$sql = "SELECT * FROM ticket_no WHERE Route_no = 9";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $i=0;
    
     
    while($row = $result->fetch_assoc()) { $i=$i+$row['number'];}}






$sql = "SELECT * FROM ticket_no WHERE Route_no = 10";  
$result =  mysqli_query($connection, $sql);  
   
if ($result->num_rows > 0) {   $j=0;
    
     
    while($row = $result->fetch_assoc()) { $j=$j+$row['number'];}}


echo "
<script>
  var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['Chunxi Road to Jianshe Road', 'Cultural Road to Jianshe Road', 'Guoguang Road to Chunxi Road', 'Jianshe Road to Guoguang Road', 'Chengdu to Jiuzhaigou', 'Yaan to Kangding', 'Chengdu to Weiyuan','Weiyuan to Mianyang','Chengdu to Chongqing','Chengdu to Meishan'],
			datasets: [{
				label: 'Numbers',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [$a, $b, $c, $d, $e, $f, $g, $h, $i, $j]		}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Last Tickets Sale'
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			barChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myBar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[barChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + (barChartData.datasets.length + 1),
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				borderWidth: 1,
				data: []
			};

			for (var index = 0; index < barChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			barChartData.datasets.push(newDataset);
			window.myBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (barChartData.datasets.length > 0) {
				var month = MONTHS[barChartData.labels.length % MONTHS.length];
				barChartData.labels.push(month);

				for (var index = 0; index < barChartData.datasets.length; ++index) {
					// window.myBar.addData(randomScalingFactor(), index);
					barChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			barChartData.datasets.pop();
			window.myBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			barChartData.labels.splice(-1, 1); // remove the label first

			barChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myBar.update();
		});
	</script>


  
 


      ";
    
    ?>