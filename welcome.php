<?php 
?>

<html>
	<head>
	<meta charset="utf-8" />
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         	<style>
        * {
  			font-size: 12pt;
  			font-family: "Verdana", "Geneva", sans-serif;
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

			input[type="submit"] {
  				background-color: #FFFFFF;
  				font-size: 120%;
			}
		</style>
	
	</head>
	<body>
		<div id="bannerarea">
			<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
			<br>
		

		<h1>Get started on your projects today!</h1>

		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  			Sign Up
		</button>

		<br>
		<br>
		</div>

		<div id="login">
			<h2>Already have an account? Welcome back!</h2>
			<form action = "project-search.php" method ="get">
			<input type="text" name="userLogin" class="textfield" placeholder="Username">
			<br><br>
			<input type="text" name="userPassword" class="textfield" placeholder="Password">
			<br><br>
			<input type="submit" name="submit" class="submit" value="Sign In">
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
        	  <form role="form" enctype="multipart/form-data" action="uploadImg.php" method="POST">
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
  		   <div class="checkbox">
    		   <label><input type="checkbox"> Remember me</label>
  		   </div>
         <div>
         <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
          <label>Choose a file to upload: <input type="file" name="image" /></label>
          </div>
		   </form>
      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

		<h3>Property of DogByte</h3>

	</body>
</html>

<?php

?>