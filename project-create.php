<!DOCTYPE html>
<html>
	<head>
	<link href="ugacreate.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	<br>
		<h1>Let's make a project! Fill in the data you want potential collab partners to see when they look at your project.</h1>
	<br>	
		<div id="projectform">
			<form action = "updateProjectDB.php" method="post">
			<fieldset>
				<legend>Create a New Project</legend>
			<h2>Title:</h2>
				<input type="textarea" name="ptitle" class="textfield" size="50" placeholder="My Project Title"/>
			<br>
			<h2>Description:</h2>
				<textarea type = "textarea" name="pdescription" rows="6" cols="80" placeholder="Enter a simple description of what your project is about. Include details such as expected workloads and timelines, and (if applicable) methods of payment or compensation."></textarea>
			<br>
			<h2>Project Due Date:</h2>
				<input type="text" name="pduedate" class="date" size="50" pattern = format="%m-%d-%Y" placeholder="mm-dd-yyyy"/>
			<br><br>
			<h2>Your Name:</h2>
				<input type="textarea" name="creatorName" class="textfield" size="50" placeholder="My Name"/>
			<br>
			<h2>Location (if applicable):</h2>
				<input type="radio" name="plocation" value="None" checked>No Location (Online)
				<input type="radio" name="plocation" value="Place">Google Maps API
			<h2>Tags (select at least one):</h2>
				<input type="checkbox" name="tag" value="CompSci"/>Computer Science
				<br>
				<input type = "checkbox" name="tag" value="Music"/>Animation
				<br>
				<input type="checkbox" name="tag" value="CompSci"/>Video
				<br>
				<input type = "checkbox" name="tag" value="Music"/>Audio
				<br>
				<input type="checkbox" name="tag" value="CompSci"/>Music
				<br>
				<input type = "checkbox" name="tag" value="Music"/>Gaming
				<br>
				<input type="checkbox" name="tag" value="CompSci"/>Other
				<br>
				<br>
			<input type="submit" name="submit" class="submit" value="Post Your Project"/>
			</fieldset>
			</form>
		
		</div>
		</body>
	
</html>
