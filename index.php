<!DOCTYPE html>
<html>
<head>

<style>
#table1{
	margin-top:25px;
}
#table1 td{
	padding: 15px;
}
td #nop{
	text-align: center;
}
#result { 
  font-size: 24px;
  margin-top:20px;
}
#vc {
	color: #A10000;
	font-size: 56px;
	-webkit-text-stroke:  0px black;
}
#c {
	color: #C14F00;
	font-size: 56px;
	-webkit-text-stroke:  0px black;
}
#m {
	color: #ac4409;
	font-size: 56px;
	-webkit-text-stroke:  0px black;
}
#e {
	color: #176f34;
	font-size: 56px;
	-webkit-text-stroke: 0px black;
}
#ve {
	color: #0464c7;
	font-size: 56px;
	-webkit-text-stroke: 0px black;
}
#vebg {
	background:url('assets/ve.png') center / cover;
}
#ebg {
	background:url('assets/e.png') center / cover;
}
#mbg {
	background:url('assets/m.png') center / cover;
}
#cbg {
	background:url('assets/c.png') center / cover;
}
#vcbg {
	background:url('assets/vc.png') center / cover;
}
.custom-title{
padding:20px;
}
#result-text{
	font-size: 26px;
	margin-top:25px;
	margin-left:10px;
}

</style>
	<title>Crowdly</title>
	<script src="canvasjs-2.2/canvasjs.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-deep_purple.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script>
	/*$("#form1").submit(function () {
   $("#form1").preventDefault(); // or return false;
});*/
	</script>
</head>
<body >
	<!-- Always shows a header, even in smaller screens. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="background:#008080">
	  <header class="mdl-layout__header">
		<div class="mdl-layout__header-row">
		  <!-- Title -->
		  <span class="mdl-layout-title">Crowdly - A predictive crowd estimation tool for Central Railway</span>
		  <!-- Add spacer, to align navigation to the right -->
		  <div class="mdl-layout-spacer"></div>
		  <!-- Navigation. We hide it in small screens. -->
		  <!--<nav class="mdl-navigation mdl-layout--large-screen-only">
			<a class="mdl-navigation__link" href="">For Users</a>
			<a class="mdl-navigation__link" href="">For Personnel</a>
		  </nav>-->
		</div>
	  </header>
	  <main class="mdl-layout__content" style="background-color: #E9E9E9; padding: 10px;height: 100vh">
		<div class="jumbotron mdl-shadow--2dp" style="border: 0px solid black; float:left; width:49.5%; background: #008E7E;margin-bottom:0px;padding:15px;" id = "jt1">
			<!-- Wide card with share menu button -->
			<style>
			.demo-card-wide.mdl-card {
			  width: 100%;
			  margin-top:20px;
			}
			.demo-card-wide > .mdl-card__title {
			  color: #fff;
			  height: 176px;
			  background: url('assets/crowd.jpg') center / cover;
			}
			.demo-card-wide > .mdl-card__menu {
			  color: #fff;
			}
			
			</style>

			<div class="demo-card-wide mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title" >
				<h2 class="mdl-card__title-text">Welcome to Crowdly</h2>
			  </div>
			  <div class="mdl-card__supporting-text" >
			   Crowdly uses advanced Machine Learning algorithms to predict how crowded the railway station will be. With Crowdly, you will always be assured, if it's the right time, to start your journey.
			  </div>
			</div>
			<!--user input card -->
			<div class="demo-card-wide mdl-card mdl-shadow--2dp " style="margin-top: 30px; padding: 10px">
				<form action = "#" method="POST" id = "form1">
					<table border="0px solid black" width=100%>
						<tr>
							<td style="padding: 5px;">Station:</td>
							<td style="padding: 5px;">
								<select class="form-control" id="station" name="station">
									<?php
									$con = mysqli_connect("localhost","root","","Interns");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									else
									{
										$sql = "SELECT name,class from central";
										$result = mysqli_query($con,$sql);
										for($i = 0; $i<mysqli_num_rows($result);$i++)
										{
											$row=mysqli_fetch_assoc($result);
											echo "<option value=".$row['class'].">".$row['name']."</option>";
										}
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td style="padding: 5px;">Date</td>
							<td style="padding: 5px;">
								<select class="form-control" id="date" name="date">
									<?php 
										for($i=1;$i<=31;$i++)
										{
											echo "<option value=".$i.">".$i."</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td style="padding: 5px;">Month</td>
							<td style="padding: 5px;">
								<select class="form-control" id="month" name="month">
									<option disabled selected = true>Month</option>
									<option value=1>January</option>
									<option value=2>February</option>
									<option value=3>March</option>
									<option value=4>April</option>
									<option value=5>May</option>
									<option value=6>June</option>
									<option value=7>July</option>
									<option value=8>August</option>
									<option value=9>September</option>
									<option value=10>October</option>
									<option value=11>November</option>
									<option value=12>December</option> 
								</select>
							</td>
						</tr>
						<tr>
							<td style="padding: 5px;">Hour</td>
							<td style="padding: 5px;">
								<select class="form-control" id="hour" name="hour">
									<option disabled selected = true>Hour</option>
									<option value=7>7:00-8:00</option>
									<option value=8>8:00-9:00</option>
									<option value=9>9:00-10:00</option>
									<option value=10>10:00-11:00</option>
									<option value=11>11:00-12:00</option>
									<option value=12>12:00-1:00</option>
									<option value=13>1:00-2:00</option>
									<option value=14>2:00-3:00</option>
									<option value=15>3:00-4:00</option>
									<option value=16>4:00-5:00</option>
									<option value=17>5:00-6:00</option>
									<option value=18>6:00-7:00</option>
									<option value=19>7:00-8:00</option>
									<option value=20>8:00-9:00</option>
									<option value=21>9:00-10:00</option>
									<option value=22>10:00-11:00</option>
									<option value=23>11:00-12:00</option>  
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td  style="float: right; padding: 5px; "><input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="align-self: right;" name="submit"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div class="jumbotron mdl-shadow--2dp" style="border: 0px solid black; float:right; width:50%; background: #008E7E;padding:15px;margin-bottom:0px;" id = "jt2">
			<div class=" demo-card-wide mdl-card mdl-shadow--2dp result-custom" style="padding:5px;min-height:100px;" id = "initdiv1">		
			
			
				<?php
				if(isset($_POST['submit']) && !empty($_POST) )
				{
					$m = $_REQUEST["month"];
					$d = $_REQUEST["date"];
					$h = $_REQUEST["hour"];
					$s = $_REQUEST["station"];
					
					//echo "<tr><td id = 'result'>On ".$d."/".$m." from ".$h." to ".($h+1).", approximate number<br>of people would be</td>";
					
					shell_exec("cd ..");
					shell_exec("cd ..");
					$output = explode(",", exec("C:\\Users\\Admin\\AppData\\Local\\Programs\\Python\\Python35-32\\python.exe C:\\xampp\\htdocs\\crowdly\\predictor.py $m $d $h $s 2>&1"));
					$output[0] = substr($output[0],1);
					$output[16] = substr($output[16],0,strlen($output[16])-1);
					
					makeChart($output);
					$nop = (int)$output[$h-7];
					if($nop <=250)
					{
						echo '<div class="custom-title" id = vebg >
							<span class="mdl-card__title-text" id = ve>'.$nop.'<span id = result-text> Passengers approximtely</span></span>
							</div>';
					}
					else if($nop > 250 && $nop <=500)
					{
						echo '<div class="custom-title" id = ebg  >
							<span class="mdl-card__title-text" id = e>'.$nop.'<span id = result-text> Passengers approximtely</span></span>
							</div>';
					}
					else if($nop > 500 && $nop <=750)
					{
						echo '<div class="custom-title" id = mbg  >
							<span class="mdl-card__title-text" id = m>'.$nop.'<span id = result-text> Passengers approximtely</span></span>
							</div>';
					}
					else if($nop > 750 && $nop <=1000)
					{
						echo '<div class="custom-title" id = cbg >
							<span class="mdl-card__title-text" id = c>'.$nop.'<span id = result-text> Passengers approximtely</span></span>
							</div>';
					}
					else 
					{
						echo '<div class="custom-title" id = vcbg >
							<span class="mdl-card__title-text" id = vc>'.$nop.'<span id = result-text> Passengers approximtely</span></span>
							</div>';
					}
					
					if($nop <= 250)
					{
						echo '<div class="mdl-card__supporting-text" style= "font-size:22px;">Station will be empty at this time</div>';
					}
					else if($nop >250 && $nop <= 750)
					{
						echo '<div class="mdl-card__supporting-text" style= "font-size:22px;">Station will be crowed at this time</div>';
					}
					else
					{
						echo '<div class="mdl-card__supporting-text" style= "font-size:22px;" >Station will be heavily crowed at this time</div>';
					}
				}
				?>
				
			</div>
			<div id="chartContainer" class = "mdl-shadow--2dp" style="height: 348px; max-width: 920px; margin: 0px auto;margin-top:20px;">
			<?php 
			function makeChart($output) {
			echo '<script>
			window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2",
				title:{
					text: "Predictions for the day"
				},
			axisX:{
					includeZero: false,
					minimum:7
				},
				axisY:{
					includeZero: true
				},
				data: [{        
					type: "line",       
					dataPoints: [
						{ y: 0 },
						{ y: 0 },
						{ y: 0 },
						{ y: 0 },
						{ y: 0 },
						{ y: 0 },
						{ y: 0 },';
						for($i=0;$i<sizeof($output);$i++)
						{
							echo '{ y: '.$output[$i].' },';
						}						
					echo ']
				}]
			});
			chart.render();

			}
			</script>';
}

			?>
			</div>
		</div>
	  </main>
	</div>


</body>
</html>

