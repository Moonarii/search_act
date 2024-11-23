<?php  

require_once 'dbConfig.php';

function getAllApplicants($pdo) {
	$sql = "SELECT * FROM search_applicant_data 
			ORDER BY firstname ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantByID($pdo, $applicant_id) {
	$sql = "SELECT * from search_applicant_data WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForAnApplicant($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM search_applicant_data WHERE 
			CONCAT(firstname, lastname, email_added, gender, 
				phone_number, yearsofexperience, specialization, 
				favoritedbms, favoritefrontendframework) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function insertNewApplicant($pdo, $firstname, $lastname, $gender, 
	$email_added, $phone_number, $yearsofexperience, $specialization, 
	$favoritedbms, $favoritefrontendframework) {

	$sql = "INSERT INTO search_applicant_data 
			(
				firstname,
				lastname,
				gender,
				email_added,
				phone_number,
				yearsofexperience,
				specialization,
				favoritedbms,
				favoritefrontendframework
			)
			VALUES (?,?,?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([
		$firstname, $lastname, $gender, $email_added, 
		$phone_number, $yearsofexperience, $specialization, 
		$favoritedbms, $favoritefrontendframework
	]);

	if ($executeQuery) {
		return true;
	}
}

function editApplicant($pdo, $firstname, $lastname, $gender, 
	$email_added, $phone_number, $yearsofexperience, $specialization, 
	$favoritedbms, $favoritefrontendframework, $applicant_id) {

	$sql = "UPDATE search_applicant_data
				SET firstname = ?,
					lastname = ?,
					gender = ?,
					email_added = ?,
					phone_number = ?,
					yearsofexperience = ?,
					specialization = ?,
					favoritedbms = ?,
					favoritefrontendframework = ?
				WHERE applicant_id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstname, $lastname, $gender, $email_added, 
		$phone_number, $yearsofexperience, $specialization, $favoritedbms, 
		$favoritefrontendframework, $applicant_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteApplicant($pdo, $applicant_id) {
	$sql = "DELETE FROM search_applicant_data 
			WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return true;
	}
}

?>
