<?php  

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertApplicantBtn'])) {
	$insertApplicant = insertNewApplicant($pdo, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['email_added'], $_POST['phone_number'], $_POST['yearsofexperience'], $_POST['specialization'], $_POST['favoritedbms'], $_POST['favoritefrontendframework']);

	if ($insertApplicant) {
		$_SESSION['message'] = "Successfully inserted!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['editApplicantBtn'])) {
	$editApplicant = editApplicant($pdo, $_POST['firstname'], $_POST['lastname'], $_POST['gender'], $_POST['email_added'], $_POST['phone_number'], $_POST['yearsofexperience'], $_POST['specialization'], $_POST['favoritedbms'], $_POST['favoritefrontendframework'], $_GET['applicant_id']);

	if ($editApplicant) {
		$_SESSION['message'] = "Successfully edited!";
		header("Location: ../index.php");
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$deleteApplicant = deleteApplicant($pdo, $_GET['applicant_id']);

	if ($deleteApplicant) {
		$_SESSION['message'] = "Successfully deleted!";
		header("Location: ../index.php");
	}
}

if (isset($_GET['searchBtn'])) {
	$searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']);
	foreach ($searchForAnApplicant as $row) {
		echo "<tr> 
				<td>{$row['applicant_id']}</td>
				<td>{$row['firstname']}</td>
				<td>{$row['lastname']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['email_added']}</td>
				<td>{$row['phone_number']}</td>
				<td>{$row['yearsofexperience']}</td>
				<td>{$row['specialization']}</td>
				<td>{$row['favoritedbms']}</td>
				<td>{$row['favoritefrontendframework']}</td>
			  </tr>";
	}
}

?>
