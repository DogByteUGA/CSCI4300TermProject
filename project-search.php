<?php 
   include 'header.html';

//Connect to db

      $servername = "127.0.0.1";
      $username = "";
      $password = "";
      $dbname = "ajax01";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $sql = "SELECT * FROM projects ORDER BY project_id;";
	// perform query		
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    echo "New record created successfully";
     $creator;
     $title;
     $description;
     $location;
     $date;
      $type;
      $pimage;

//load all rows in the database
    while ($r = $q->fetch()){
	 $creator = htmlspecialchars($r['creator_name']); 
	 $title =  htmlspecialchars($r['project_title']); 
 	 $description =  htmlspecialchars($r['project_description']);
 	 $location = htmlspecialchars($r['project_location']); 
	 $date =  htmlspecialchars($r['project_date']); 
 	 $type =  htmlspecialchars($r['project_type']);
   $pimage =  htmlspecialchars($r['creator_image']);
   $pimage = "uploads/" .$pimage;

   echo $pimage;



    ?>

  <div class="row">
    <div class="col-md-4">
      <img src= "http://i.stack.imgur.com/7YCkq.jpg" class="img-responsive" alt="Cinque Terre"> <img src =  <? echo $pimage?> class="img-circle" alt="avatar">
      <p class = "teamLabel"><strong>Creator:     <strong>  <? echo $creator?></p>
      

    </div>
    <div class="col-md-8">
            <h5><strong>Title: </strong><? echo $title?></h5>
            <h5><strong>Description: </strong><? echo $description?></h5>
            <h5><strong>Type: </strong><? echo $type?></h5>
            <h5><strong>Location: </strong><? echo $location?></h5>
            <h5><strong>Date Posted: </strong><? echo $date?></h5>
    </div>
  </div>

<?php } }

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

</div>

</body>
</html>
<?php

?>
