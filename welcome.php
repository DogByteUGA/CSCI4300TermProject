<html>
	<head>
	<meta charset="utf-8" />
		<title>UGACreate</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="actions.js"></script>
        
        <style>
        * {
  			font-size: 12pt;
  			font-family: "Verdana", "Geneva", sans-serif;
		}
		p {
			color: yellow;
		}
		h1{
  			margin-top: 0em;
		}
		body {
  			background-color: white;
		}
		#bannerarea{
			margin-top: 10px;
			margin-left: 10px;
		}
  			
		h2 {
		  	color: white;
  			font-weight: bold;
		}
		h3{
			margin-left: 10px;
			font-weight: bold;
		}

		h4{
			color: white;
			font-style: italic;
		}

		#signUp{
  			background-color: #FFFFFF;
		}
		input[type="button"] {
	  		background-color: #FFFFFF;
  			font-size: 120%;
		}
		#login {
  			background-image: url("https://41.media.tumblr.com/1cfb06a166f9021fb1eb8640e6611bf8/tumblr_nlx2p33nuR1tkwpyuo2_r1_540.jpg");
  			padding-bottom: 100px;
  			padding-right: 700px;
  			padding-top: 100px;
  			padding-left: 100px;
		}
		button[type="button"]{
			background-color: #470000;
			border-color: black;
		}
		button[type="button"]:hover{
			background-color: #470000;
			border-color: black;
		}

		.signin{
			background-color: #FFFFFF;
			font-size: 120%;
		}
		.checkbox {
			color: white;
  			font-size: 120%;
		}

		input[type="submit"]{
			background-color: #470000;
			border-color: black;
		}
		</style>
	
	</head>
	
	<body>




		<div id="bannerarea">
			<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
			<br>
			<h1>Get started on your projects today!</h1>
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"> Sign Up 
			</button>
			<br>
			<br>	
		</div>
	
<div id="login">
			<h2>Already have an account? Welcome back!</h2>
			<form action = "./welcome.php" method ="post" accept-charset="utf-8">
				<?php
					if(isset($_POST['userLogin']) && isset($_POST['userPassword'])){
						if($_POST['userLogin']=="" || $_POST['userPassword']==""){
							?>
							<p>Error. Invalid username or password.</p>
							<?php
						}
						else{
							$host="127.0.0.1:3306"; // Host name 
							$username=""; // Mysql username 
							$password=""; // Mysql password 
							$db_name="ajax01"; // Database name 
							$tbl_name="users"; // Table name 
							// Connect to server and select databse.
							mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
							mysql_select_db("$db_name") or die("cannot select DB");
							// username and password sent from form 
							$myusername=$_POST['userLogin']; 
							$mypassword=$_POST['userPassword']; 
							$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and user_password='$mypassword'";
							$result=mysql_query($sql);
							// Mysql_num_row is counting table row
							$count=mysql_num_rows($result);
							// If result matched $myusername and $mypassword, table row must be 1 row
							if($count==1){
								header("location:project-search.php");
							}	
						}
					}
				?>
				<input type="text" name="userLogin" class="textfield" placeholder="Username" maxlength="20">
				<br>
				<br>
				<input type="password" name="userPassword" class="textfield" placeholder="Password" maxlength="20">
				<br>
  		   		<div class="checkbox">
    		   		<label><input type="checkbox"> Remember me</label>
  		   		</div>
				<input type="submit" id="signin" name="submit"  class="btn btn-primary btn-lg" value="Sign In">
			</form>

 		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		 <h4 class="modal-title" id="myModalLabel">Create Account</h4>
      			</div>
      		<div class="modal-body">
        	  <form id="login-form" role="form" enctype="multipart/form-data" action="./welcome.php" method="POST">
   			  <div class="form-group" id="name">
      		     <label>Name: </label>
     		     <input type="text" class="form-control" name="name" id="nameA" onchange="nameFix()">
     		     <span class="glyphicon glyphicon-ok form-control-feedback" id="nameIcon"></span>
    		  </div>
    		<div class="form-group" id="user">
    		   <label for="username">Username:</label>
    	       <input type="textarea" class="form-control" name="username" id="unameA" onchange = "unameFix()">
    	       <span class="glyphicon glyphicon-ok form-control-feedback" id="unameIcon"></span>
  			</div>
 		    <div class="form-group" id="email">
    		   <label for="email">Email address:</label>
    	       <input type="email" class="form-control" name="email" id="emailA" onchange="emailFix()">
    	       <span class="glyphicon glyphicon-ok form-control-feedback" id="emailIcon"></span>
  			</div>
  			<div class="form-group" id="phone">
      		   <label>Number: </label>
      	 	   <input type="text" class="form-control" id="tele" name="number" value ="xxx-xxx-xxxx" onchange="teleFix()">
      	 	   <span class="glyphicon glyphicon-ok form-control-feedback" id="numberIcon"></span>
    	    </div>
    		<div class="form-group" id="address">
     		    <label>Address: </label>
      		    <input type="textarea" class="form-control" name="address" id="ad" onchange = "adFix()">
      		    <span class="glyphicon glyphicon-ok form-control-feedback" id="addressIcon"></span>
    		</div>
   		    <div class="form-group" id="major">
      			<label>Major: </label>
      			<input type="textarea" class="form-control" name="major" id="majorA" onchange="majorChange()">
      			<span class="glyphicon glyphicon-ok form-control-feedback" id="majorIcon"></span>
   		   </div>
  			<div class="form-group" id="pwd">
    		   <label for="pwd">Password:</label>
   		       <input type="password" class="form-control" name="password" id="pwdA" onchange="pwdChange">
   		       <span class="glyphicon glyphicon-ok form-control-feedback" id="pwdIcon"></span>
  		   </div>
         <div>
         <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
          <label>Choose a file to upload as avatar: <input type="file" name="image" /></label>
          <br>
          </div>
		   
      	</div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary"></input>
      </div>
      </form>
    </div>
  </div>
</div>


<?php // php stuff for making user profile
//Template for basic page
$template = <<<EOD
	<style>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{name}'s Profile</title>
	<style>
        * {
  			font-size: 12pt;
  			font-family: "Verdana", "Geneva", sans-serif;
		}
		h3{
			margin-left: 10px;
		}
		#description-bg{
			background-image: url("https://41.media.tumblr.com/1cfb06a166f9021fb1eb8640e6611bf8/tumblr_nlx2p33nuR1tkwpyuo2_r1_540.jpg");
  			padding-bottom: 100px;
  			padding-top: 100px;
		}
		#description{
			background-color: white;
			font-size: 12pt;
  			font-family: "Verdana", "Geneva", sans-serif;
		}

	</style>
</head>

<body>
	<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
	<br>
	<br>
	<div id="description-bg">
		<div id="description">
			<br>
			<p>{image}</p>
			<ul>Name: {name}</ul>
			<ul>Email: {email} </ul>
			<ul>Phone Number: {number} </ul>
			<ul>Address: {address} </ul>
			<ul>Major: {major} </ul>

			<h3>Current Projects:</h3>
			<br>
		</div>
	</div>
</body>
</html>

EOD;

//handle the posted form
if(isset($_POST['username'])){
    //replace the areas of the template with the posted values
    $page = str_replace('{username}',htmlentities($_POST['username']),$template);
    $page = str_replace('{name}',htmlentities($_POST['name']),$page);
    $page = str_replace('{email}',htmlentities($_POST['email']),$page);
    $page = str_replace('{number}',htmlentities($_POST['number']),$page);
    $page = str_replace('{address}',htmlentities($_POST['address']),$page);
    $page = str_replace('{major}',htmlentities($_POST['major']),$page);
    //create a name for the new page
    $pagename = ($_POST['username']).'.php';

    //db connect & select
    $db=mysql_connect('127.0.0.1','','');
    mysql_select_db('ajax01');

    //check if page already exists
    //$result = mysql_query('SELECT pagename from users WHERE url="'.mysql_real_escape_string($pagename).'"');

        //inset new page into db
        mysql_query('INSERT into `users` (`user_username`,`user_name`,`user_email`,`user_number`,`user_address`,`user_major`,`user_url`,)VALUES("",
        "'.mysql_real_escape_string(htmlentities($_POST['username'])).'",
        "'.mysql_real_escape_string(htmlentities($_POST['name'])).'",
        "'.mysql_real_escape_string(htmlentities($_POST['email'])).'",
        "'.mysql_real_escape_string(htmlentities($_POST['number'])).'",
        "'.mysql_real_escape_string(htmlentities($_POST['address'])).'",
        "'.mysql_real_escape_string(htmlentities($_POST['major'])).'",   
        "'.$pagename.'")');

        //put the created content to file
        file_put_contents('./users/'.$pagename,$page);
        //make a notice to show the user
        $notice = '<p>New Page created: <b>./users/'.$pagename.'</b></p>';
		}
		?>

		<?php //notify if successful making user profile
			if(isset($notice)){
		?>
				<h4>Successfully registered!</h4>
				<h4>Please sign into your account to get started.</h4>
		<?php
			} 
		?>
	
		</div>
		<h3>Property of DogByte</h3>
	</body>
</html>
