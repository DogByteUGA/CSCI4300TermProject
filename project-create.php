<!DOCTYPE html>
<html>
	<head>
	<link href="ugacreate.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<img src="https://41.media.tumblr.com/671ba642b48ed5a3f92438cc796417ac/tumblr_nlx2p33nuR1tkwpyuo1_r1_400.png" alt="banner logo"> 
	<br>
		<h1>Let's make a project! Fill in the data you want potential collab partners to see when they look at your project.</h1>
	<br>	
		<div id="projectform">
			<form action = "updateProjectDB.php" method="post">
			<fieldset>
				<legend>Create a New Project</legend>
			<h2>Title:</h2>
				<input type="textarea" name="ptitle" class="textfield" size="50" placeholder="My Project Title" required/>
			<br>
			<h2>Description:</h2>
				<textarea type = "textarea" name="pdescription" rows="6" cols="80" placeholder="Enter a simple description of what your project is about. Include details such as expected workloads and timelines, and (if applicable) methods of payment or compensation." required></textarea>
			<br>
			<h2>Project Due Date:</h2>
				<input type="text" name="pduedate" class="date" size="50" placeholder="mm-dd-yyyy" required/>
			<br>
			<h2>Your Name:</h2>
				<input type="textarea" name="creatorName" class="textfield" size="50" placeholder="My Name"/>
			<br>
			
			<script type = "text/javascript">
				function mapToggle()
				{
					if (document.getElementById('None').checked)
					{
						document.getElementById('MapFrame').style.display = 'none';
					}
					else
					{
						document.getElementById('MapFrame').style.display = 'block';
					}
				}
			</script>
				
			<h2>Location (if applicable):</h2>
				<input type="radio" name="plocation" id="None" onclick="javascript:mapToggle();" value="None" checked>No Location (Online)
				<input type="radio" name="plocation" id="Maps" onclick="javascript:mapToggle();" value="Place">Specify a Location
					<iframe
					id="MapFrame"
					width="600" 
					height="450" 
					frameborder="0" style="border:0";
					src="https://www.google.com/maps/embed/v1/view?zoom=16&center=33.9480%2C-83.3773&key=AIzaSyD3s4rEzLhoSGV-bAKYwP4wgqm6MUajxIY">
					</iframe>
				
			<h2>Tags (select at least one): </h2>
				<input type="radio" name="tag" value="CompSci"/>Computer Science
				<br>
				<input type = "radio" name="tag" value="Animation"/>Animation
				<br>
				<input type="radio" name="tag" value="CompSci"/>Video
				<br>
				<input type = "radio" name="tag" value="Audio"/>Audio
				<br>
				<input type="radio" name="tag" value="Music"/>Music
				<br>
				<input type = "radio" name="tag" value="Gaming"/>Gaming
				<br>
				<input type="radio" name="tag" value="Other"/>Other
				<br>
				<br>
			<input type="submit" name="submit" class="submit" value="Post Your Project"/>
			</fieldset>
			</form>
		
		</div>
		</body>
	
</html>
