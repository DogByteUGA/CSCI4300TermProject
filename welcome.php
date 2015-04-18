<html>
	<head>
	<meta charset="utf-8" />
		<title>UGACreate</title>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
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
					if(isset($_POST['name'])||isset($_POST['password'])){
				?>
					<p>Error. Invalid username or password.</p>
				<?php
					}
				?>
				<input type="text" name="username" class="textfield" placeholder="Username" maxlength="20">
				<br>
				<br>
				<input type="password" name="password" class="textfield" placeholder="Password" maxlength="20">
				<br>
  		   		
  		   		<div class="checkbox">
    		   		<label><input type="checkbox"> Remember me</label>
  		   		</div>

				<input type="submit" id="signin" name="submit"  class="btn btn-primary btn-lg" value="Sign In">
		
			</form>
		
		</div>



 		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
        		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		 <h4 class="modal-title" id="myModalLabel">Create Account</h4>
      			</div>
      		<div class="modal-body">
        	  <form id="login-form" role="form" enctype="multipart/form-data" action="./welcome.php" method="POST">
   			  <div class="form-group">
      		     <label>Name: </label>
     		     <input type="textarea" class="form-control" name="name">
    		  </div>
 		    <div class="form-group">
    		   <label for="email">Email address:</label>
    	       <input type="email" class="form-control" name="email">
  			</div>
  			<div class="form-group">
      		   <label>Number: </label>
      	 	   <input type="textarea" class="form-control" name="number" value ="xxx-xxx-xxxx">
    	    </div>
    		<div class="form-group">
     		    <label>Address: </label>
      		    <input type="textarea" class="form-control" name="address">
    		</div>
   		    <div class="form-group">
      			<label>Major: </label>
      			<input type="textarea" class="form-control" name="major">
   		   </div>
  			<div class="form-group">
    		   <label for="pwd">Password:</label>
   		       <input type="password" class="form-control" name="password">
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
	</style>
</head>

<body>
	<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
	<p>{image}</p>
	<ul>Name: {name}</ul>
	<ul>Email: {email} </ul>
	<ul>Phone Number: {number} </ul>
	<ul>Address: {address} </ul>
	<ul>Major: {major} </ul>

	<h3>Current Projects:</h3>

</body>
</html>
EOD;

//handle the posted form
if(isset($_POST['name'])){
    //replace the areas of the template with the posted values
    $page = str_replace('{name}',htmlentities($_POST['name']),$template);
    $page = str_replace('{email}',htmlentities($_POST['email']),$page);
    $page = str_replace('{number}',htmlentities($_POST['number']),$page);
    $page = str_replace('{address}',htmlentities($_POST['address']),$page);
    $page = str_replace('{major}',htmlentities($_POST['major']),$page);
    //create a name for the new page
    $pagename = ($_POST['name']).'.php';

    //db connect & select
    $db=mysql_connect('127.0.0.1','','');
    mysql_select_db('users');

    //check if page already exists
    $result = mysql_query('SELECT pagename from yourtable WHERE url="'.mysql_real_escape_string($pagename).'"');

        //inset new page into db
        mysql_query('INSERT into yourtable (`name`,`email`,`number`,`address`,`major`,`url`)VALUES("",
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
if(isset($notice)){echo $notice;} 
?>

		<h3>Property of DogByte</h3>
	</body>
</html>
