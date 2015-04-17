<?php
      $servername = "127.0.0.1:3306";
      $username = "root";
      $password = "";
      $dbname = "ajax01";
/*TABLE IS AS FOLLOWS(USER ID IS AUTOMATIC)
user_id
user_name
user_email
user_address
user_major
user_password
user_image*/

//get user info
	$uname = (isset($_POST['name']) ?  htmlspecialchars($_POST['name']) : "");
	$uemail = (isset($_POST['email']) ?  htmlspecialchars($_POST['email']) : "");
	$unumber = (isset($_POST['number']) ?  htmlspecialchars($_POST['number']) : "");
	$uaddress = (isset($_POST['address']) ?  htmlspecialchars($_POST['address']) : "");
	$umajor = (isset($_POST['major']) ?  htmlspecialchars($_POST['major']) : "");
	$upassword = (isset($_POST['password']) ?  htmlspecialchars($_POST['password']) : "");
    $img = (isset($_POST['image']) ?  htmlspecialchars($_POST['image']) : "");

//get user image
    $target = "uploads/";
    $target = $target . basename($_FILES['image']['name']); 
    $uimage = ($_FILES['image']['name']);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo "The file ".  basename($_FILES['image']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (user_name,user_email,user_number,user_address,user_major,user_password,user_image)
    		VALUES('$uname','$uemail','$unumber','$uaddress','$umajor','$upassword','$uimage')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }



//upload file to server


$conn = null;


header("Location:user-profile.php");

?>
