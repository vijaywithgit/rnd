<?php
include ('config.php');
header("Content-type: application/x-msdownload");
		$filename = 'export_'.date('dmyhis');
		# replace excelfile.xls with whatever you want the filename to default to
		header("Content-Disposition: attachment; filename=".$filename.".xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		?>
		<table border="1" align="center">
	<tr><th colspan=4 >Result</th></tr>
	<tr><th>TC No.</th><th>Course Name</th><th>Machine Requirement</th><th>Machine to Trainee Ratio</th></tr>
	<?php
	$query = "SELECT * FROM `tc` group by tc_name";
	$result = mysqli_query($link,$query);
	//print_r($result);
	if (mysqli_num_rows($result) > 0) {
		while($resdata = mysqli_fetch_array($result))
		{
			echo "<tr><td>".$resdata['id']."</td><td>".$resdata['tc_name']."</td>";
			echo "<td>";
			echo "<table border='1'>";
			$query2 = "SELECT * FROM `tc` where tc_name='".$resdata['tc_name']."'";
			$result2 = mysqli_query($link,$query2);
			while($resdata2 = mysqli_fetch_array($result2)){
			echo "<tr><td>".$resdata2['course_name']."</td></td>";
			}
			echo "</table>";
			echo "</td>";
			echo "<td>";
			echo "<table border='1'>";
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
		</table>