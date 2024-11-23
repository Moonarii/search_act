<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Applicant</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Insert New Applicant!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname">
		</p>
		<p>
			<label for="email_added">Email</label> 
			<input type="text" name="email_added">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender">
		</p>
		<p>
			<label for="phone_number">Phone Number</label> 
			<input type="text" name="phone_number">
		</p>
		<p>
			<label for="yearsofexperience">Years of Experience</label> 
			<input type="number" name="yearsofexperience">
		</p>
		<p>
			<label for="specialization">Specialization</label> 
			<input type="text" name="specialization">
		</p>
		<p>
			<label for="favoritedbms">Favorite DBMS</label> 
			<input type="text" name="favoritedbms">
		</p>
		<p>
			<label for="favoritefrontendframework">Favorite Frontend Framework</label> 
			<input type="text" name="favoritefrontendframework">
		</p>
		<p>
			<input type="submit" name="insertApplicantBtn">
		</p>
	</form>
</body>
</html>
