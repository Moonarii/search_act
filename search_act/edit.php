<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>
	<h1>Edit the applicant!</h1>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstname" value="<?php echo $getApplicantByID['firstname']; ?>">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname" value="<?php echo $getApplicantByID['lastname']; ?>">
		</p>
		<p>
			<label for="email_added">Email</label> 
			<input type="text" name="email_added" value="<?php echo $getApplicantByID['email_added']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>">
		</p>
		<p>
			<label for="phone_number">Phone Number</label> 
			<input type="text" name="phone_number" value="<?php echo $getApplicantByID['phone_number']; ?>">
		</p>
		<p>
			<label for="yearsofexperience">Years of Experience</label> 
			<input type="text" name="yearsofexperience" value="<?php echo $getApplicantByID['yearsofexperience']; ?>">
		</p>
		<p>
			<label for="specialization">Specialization</label> 
			<input type="text" name="specialization" value="<?php echo $getApplicantByID['specialization']; ?>">
		</p>
		<p>
			<label for="favoritedbms">Favorite DBMS</label> 
			<input type="text" name="favoritedbms" value="<?php echo $getApplicantByID['favoritedbms']; ?>">
		</p>
		<p>
			<label for="favoritefrontendframework">Favorite Frontend Framework</label> 
			<input type="text" name="favoritefrontendframework" value="<?php echo $getApplicantByID['favoritefrontendframework']; ?>">
		</p>
		<p>
			<input type="submit" value="Save" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>
