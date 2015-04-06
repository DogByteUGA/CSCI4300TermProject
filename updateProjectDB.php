<?php 
//Connect to db

      $servername = "127.0.0.1";
      $username = "root";
      $password = "flaker";
      $dbname = "ajax01";

/*database for projects table is set up as follows
project_id: =1
project_title = Project two
creator_name = Ryan Reynolds
project_description = This is description
project_date = 2012-04-14
project_location = My house
project_type = computer science
*/

// Create connection

//right now only one project type can be chosen

	$pid = 17;
	$ptitle = (isset($_POST['ptitle']) ?  htmlspecialchars($_POST['ptitle']) : "");
	$cname = (isset($_POST['creatorName']) ?  htmlspecialchars($_POST['creatorName']) : "");
	$pdescription = (isset($_POST['pdescription']) ?  htmlspecialchars($_POST['pdescription']) : "");
	$pdate = (isset($_POST['pduedate']) ?  htmlspecialchars($_POST['pduedate']) : "");
	$plocation = (isset($_POST['plocation']) ?  htmlspecialchars($_POST['plocation']) : "");
	$ptype = (isset($_POST['tag']) ?  htmlspecialchars($_POST['tag']) : "");


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO projects (project_id, project_title,creator_name, project_description, project_date, project_location, project_type) VALUES ($pid, '$ptitle', '$cname', '$pdescription', '$pdate','$plocation', '$ptype')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


