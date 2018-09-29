<?php
ob_start();
include 'config.php';

$error_msg = "";
$status = false;


	
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />     
        <title>RND</title>  
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
    </head>
    <body>
	<table border="1" align="center">
	<tr><th colspan=4 >Result</th></tr>
	<tr><th>TC No.</th><th>Course Name</th><th>Machine Requirement</th><th>Machine to Trainee Ratio</th></tr>
	<?php
	$query = "SELECT * FROM `tc` group by tc_name";
	$result = mysqli_query($link,$query);
	//print_r($result);
	
	echo "<pre>";
		//print_r($resdata);
		print_r (mysqli_fetch_assoc($result));
		echo "</pre>";
		
	if (mysqli_num_rows($result) > 0) {
		while($resdata = mysqli_fetch_array($result))
		{
			
			echo "<tr><td>".$resdata['id']."</td><td>".$resdata['tc_name']."</td>";
			echo "<td>";
			echo "<table>";
			$query2 = "SELECT * FROM `tc` where tc_name='".$resdata['tc_name']."'";
			$result2 = mysqli_query($link,$query2);
			while($resdata2 = mysqli_fetch_array($result2)){
			echo "<tr><td>".$resdata2['course_name']."</td></td>";
			}
			echo "</table>";
			echo "</td>";
			echo "<td>";
			echo "<table>";
			$query3 = "SELECT * FROM `tc` where tc_name='".$resdata['tc_name']."'";
			$result3 = mysqli_query($link,$query3);
			while($resdata3 = mysqli_fetch_array($result3)){
			echo "<tr><td>".$resdata3['machine_req']."</td></td>";
			}
			echo "</table>";
			echo "</td>";
		}

		}
	?>
	
	<tr><td colspan="5"><a href="export_inXl.php" target="_blank">Export in XL </a></td></tr>
	</table>	   
    </body>
</html>