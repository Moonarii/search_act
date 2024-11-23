<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this applicant?</h1>
	<?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getApplicantByID['firstname']; ?></h2>
		<h2>Last Name: <?php echo $getApplicantByID['lastname']; ?></h2>
		<h2>Email: <?php echo $getApplicantByID['email_added']; ?></h2>
		<h2>Gender: <?php echo $getApplicantByID['gender']; ?></h2>
		<h2>Phone Number: <?php echo $getApplicantByID['phone_number']; ?></h2>
		<h2>Years of Experience: <?php echo $getApplicantByID['yearsofexperience']; ?></h2>
		<h2>Specialization: <?php echo $getApplicantByID['specialization']; ?></h2>
		<h2>Favorite DBMS: <?php echo $getApplicantByID['favoritedbms']; ?></h2>
		<h2>Favorite Frontend Framework: <?php echo $getApplicantByID['favoritefrontendframework']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
				<input type="submit" name="deleteApplicantBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>
