<?php 
   include '../user-header.php';
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{username}'s Profile</title>
	<style>
        * {
  			font-size: 12pt;
  			font-family: "Verdana", "Geneva", sans-serif;
		}
		h3{
			margin-left: 10px;
		}
		#bg{
			background-image: url("https://41.media.tumblr.com/1cfb06a166f9021fb1eb8640e6611bf8/tumblr_nlx2p33nuR1tkwpyuo2_r1_540.jpg");
  			margin-top: 300px;
  			padding-bottom: 300px;
		}
		#description{
			font-size: 12pt;
			font-family: "Verdana", "Geneva", sans-serif;
			position: relative;
			float: left;
			padding-right: 200px;
			margin-top: 50px;
		}
		#projects{
			position: relative;
			float: left;
			margin-top: 25px;
		}
		#avatar{
			position: relative;
			float: left;
		}
		input[type="submit"] {
			background-color: #FFFFFF;
			font-size: 120%;
		}
	</style>
</head>

<body>
	<div id="avatar">
		<ul><img src="https://41.media.tumblr.com/9f93f36af014846dc6046e2c2a920473/tumblr_nlx2p33nuR1tkwpyuo3_r1_250.jpg"></ul>
	</div>
	<div id="description">
		<ul><b>Name:</b> {name}</ul>
		<ul><b>Email:</b> {email} </ul>
		<ul><b>Phone Number:</b> {number} </ul>
		<ul><b>Address:</b> {address} </ul>
		<ul><b>Major:</b> {major} </ul>
	</div>
	<div id="projects">
		<h3>Current Projects:</h3>
			<ul>
				<form action="../project-create.php">
					<input type="submit" value="Create a new project!">
					</input>
				</form>
			</ul>
	</div>
	<div id="bg">
	</div>

</body>
</html>
