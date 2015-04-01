<!DOCTYPE html>
<html>
	<head>
	<link href="ugacreate.css" type="text/css" rel="stylesheet" />
	</head>
<?php
	$title = (isset($_POST["ptitle"]) ?  $_POST["ptitle"] : "");
	$description = (isset($_POST["pdescription"]) ?  $_POST["pdescription"] : "");
	$duedate = (isset($_POST["pduedate"]) ?  $_POST["pduedate"] : "");
	$location = (isset($_POST["plocation"]) ?  $_POST["plocation"] : "");
	?>
	
	<div id="myproject">
		<h1><?php echo $title?></h1>
		<?php echo $description?>
		<br><br>
		<?php echo "Location: " . $location?>
		<br><br>
		<?php echo "Due Date: ". $duedate?>
		<br><br>
		<?php echo "Tags: ";
		if (isset($_POST['tags'])) 
			echo implode(", ", $_POST['tags']);
		?> 

	</div>
</html>
