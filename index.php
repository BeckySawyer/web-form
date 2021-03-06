<?php
	require 'includes/functions.php';

	$name = $address = $email = $age = $date = $movies = $gender = '';
	$errors = [];

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$date = $_POST['dateofbirth'];
		$movies =  !empty($_POST['movies']) ? $_POST['movies'] : '';
		$gender = !empty($_POST['gender']) ? $_POST['gender'] : '';
	
		// php functions
		$errors['name'] = validateName($name);
		$errors['address'] = validateAddress($address);
		$errors['email'] = validateEmail($email);
		$errors['age'] = validateAge($age);
		$errors['dateofbirth'] = validateDate($date);
		$errors['movies'] = validateMovies($movies);
		$errors['gender'] = validateGender($gender);

		// dd($_POST);
		

		// emails
		if (!$errors['name'] && !$errors['address'] && !$errors['email'] && !$errors['age'] && !$errors['dateofbirth'] && !$errors['movies'] && !$errors['gender']) {
			$formcontent=" From: $name \n Email: $email \n Address: $address \n Age: $age \n DOB: $date \n Movie Selection: $movies \n Gender: $gender";
	  		$recipient = "sawyerbecky13@gmail.com";
	  		$subject = "Form Submission";
	  		$mailheader = "From: $email \r\n";
	  		mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
	  		require 'thanks.php';
	  		die();
		}

	}

	require 'partials/header.php';
	require 'partials/form.php';
	require 'partials/footer.php';