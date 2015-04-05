<?php 
//Connect to db

      $servername = "127.0.0.1";
      $username = "root";
      $password = "flaker";
      $dbname = "ajax01";

/*database for projects table is set up as follows
project_id: =1
project_title = Project two
creator_id = 10
creator_name = Ryan Reynolds
project_description = This is description
project_date = 2012-04-14
project_location = My house
project_type = computer science
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT project_id, project_title,creator_id,creator_name,project_description,project_date,project_location,project_type FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "project_id: =" .  $row["project_id"] . "<br>". "project_title = " .  $row["project_title"]. "<br>" . " creator_id = " . $row["creator_id"]. "<br>"  . "creator_name = " . $row["creator_name"]. "<br>"  . "project_description =  " . $row["project_description"]. "<br>"  . "project_date = " . $row["project_date"]. "<br>"  . "project_location = " . $row["project_location"] . "<br>" . "project_type = "  . $row["project_type"]. "<br>"; 
        //echo json_encode($row["project_id"]);
    }


} else {
    echo "0 results";
}

  //--------------------------------------------------------------------------
  
  $conn->close();

?>