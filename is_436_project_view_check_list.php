<!DOCTYPE html>

<head>
  
<link rel="stylesheet" type="text/css" href="is_436_project_check_list.css"/>
  <style type ="text/css"></style>
<title>View Checklist</title> 
</head>
<body>
	
	<div class = "checkListContent">
		
		<div class = "linkBody">
		<div class = "linkPosition">
			
			<a class = "links" href = "https://swe.umbc.edu/~lx04615/is436/is_436_project_login.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "linkSelected" href = "https://swe.umbc.edu/~lx04615/is436/is_436_project_check_list.html">Owner Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links" href = "https://swe.umbc.edu/~lx04615/is436/is_436_project_view_check_list.php">Manager Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links" href = "#default">Account Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links" href = "https://swe.umbc.edu/~lx04615/is436/is_436_project_login.html">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;
		
		</div>
		
		<div class = "linkPosition2">
			
			<a class = "linkSelected" href = "#home">View Checklist</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Daily Tasks</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Critical Reports</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Summary Reports</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Drive-Thru Data</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Image Uploads</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Messages</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a class = "links2" href = "#default">Create User</a>&nbsp;&nbsp;&nbsp;&nbsp;

		</div>
		</div>
		
		<div class = "body">
		
		<h2>Daily Checklist</h2>
		<?php
		$entry1 = $_POST["entry1"];
		$entry2 = $_POST["entry2"];
		$entry3 = $_POST["entry3"];
		?>
			<form action="is_436_project_owner_check_list.php" method="post">
				<input type="checkbox" name="entry1" value="<?php print $entry1?>"><?php print $entry1?><br />
				<input type="checkbox" name="entry2" value="<?php print $entry2?>"><?php print $entry2?><br />
				<input type="checkbox" name="entry3" value="<?php print $entry3?>"><?php print $entry3?><br />
				<input type="submit" value="Submit">
			</form>
		
		</div>
	</div>