<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>

	<?php if (isset($_SESSION['message'])) { ?>
		<h1 style="color: green; text-align: center; background-color: ghostwhite; border-style: solid;">	
			<?php echo $_SESSION['message']; ?>
		</h1>
	<?php } unset($_SESSION['message']); ?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
		<input type="text" name="searchInput" placeholder="Search here">
		<input type="submit" name="searchBtn">
	</form>

	<p><a href="index.php">Clear Search Query</a></p>
	<p><a href="insert.php">Insert New Applicant</a></p>

	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Phone Number</th>
			<th>Years of Experience</th>
			<th>Specialization</th>
			<th>Favorite DBMS</th>
			<th>Favorite Frontend Framework</th>
			<th>Action</th>
		</tr>

		<?php if (!isset($_GET['searchBtn'])) { ?>
			<?php $getAllApplicants = getAllApplicants($pdo); ?>
				<?php foreach ($getAllApplicants as $row) { ?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['email_added']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['phone_number']; ?></td>
						<td><?php echo $row['yearsofexperience']; ?></td>
						<td><?php echo $row['specialization']; ?></td>
						<td><?php echo $row['favoritedbms']; ?></td>
						<td><?php echo $row['favoritefrontendframework']; ?></td>
						<td>
							<a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
							<a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
						</td>
					</tr>
			<?php } ?>
			
		<?php } else { ?>
			<?php $searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']); ?>
				<?php foreach ($searchForAnApplicant as $row) { ?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['email_added']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['phone_number']; ?></td>
						<td><?php echo $row['yearsofexperience']; ?></td>
						<td><?php echo $row['specialization']; ?></td>
						<td><?php echo $row['favoritedbms']; ?></td>
						<td><?php echo $row['favoritefrontendframework']; ?></td>
						<td>
							<a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
							<a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
		<?php } ?>	
		
	</table>
</body>
</html>
