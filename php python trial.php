<!DOCTYPE html>
<html>
<head>
	<title>Crowd Prediction</title>
</head>
<body>
<form action = "#" method="POST">
<table>

	<tr>
		<td>Month:</td>
		<td>
			<select name = "month">
			  <option value=1>Jan</option>
			  <option value=2>Feb</option>
			  <option value=3>mar</option>
			  <option value=4>apr</option>
			  <option value=5>may</option>
			  <option value=6>jun</option>
			  <option value=7>jul</option>
			  <option value=8>aug</option>
			  <option value=9>sept</option>
			  <option value=10>oct</option>
			  <option value=11>nov</option>
			  <option value=12>dec</option> 
			</select>
		</td>
	</tr>
	<tr>
		<td>Date:</td>
		<td><input type="number" name="date"></td>
	</tr>
	<tr>
		<td>Hour:</td>
		<td><input type="number" name="hour"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
</body>
</html>


<?php
#exec("C:");
#shell_exec("chdir C:\\xampp\\htdocs\\crowdly\\venv\\Scripts 2>&1");
#shell_exec("activate.bat");
#var_dump($op1); //make sure to change this path
/*exec("activate.bat", $op2);*/
if(isset($_POST['submit']) && !empty($_POST) )
{
$m = $_REQUEST["month"];
$d = $_REQUEST["date"];
$h = $_REQUEST["hour"];
echo "On ".$d."/".$m." from ".$h." to ".($h+1).",<br>";
shell_exec("cd ..");
shell_exec("cd ..");
$output = shell_exec("C:\\Users\\Admin\\AppData\\Local\\Programs\\Python\\Python35-32\\python.exe C:\\xampp\\htdocs\\crowdly\\predictor.py $m $d $h 2>&1");
#exec('C:\\Python27\\python.exe C:\\sud.py', $output);
var_dump($output); //make sure to change this path
echo "<br> Approximate number of people would be ".(int)$output;
echo "<br>Station will be ";
if((int)$output <= 250)
{
	echo "mostly empty at this time";
}
else if((int)$output >250 && (int)$output <= 750)
{
	echo "crowed at this time";
}
else
{
	echo "heavily crowed at this time";
}
}
/*$file = fopen("D:\\xampp\\htdocs\\crowd\\result.txt", "r");
echo fread($file, filesize("D:\\xampp\\htdocs\\crowd\\result.txt"));
fclose($file);*/


?>

<select class="form-control" id="month" name="month">
			<?php
			$con = mysqli_connect("10.31.13.26","student","student","Interns");
			if (mysqli_connect_errno())
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			else
			{
				$sql = "SELECT name,class from central";
				$result = mysql_query($con,$sql);
				echo $result;
				for($i = 0; $i<mysqli_num_rows($result);$i++)
				{
					$row=mysqli_fetch_assoc($result);
					<option value=$row['class']>$row['name']</option>
				}
			}
			?>
			</select>