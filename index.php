<?php
	require 'includes/functions.php';

	$name = $address = $email = $age = $dateofbirth = $movies = $gender = '';
	$errors = [];

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		// The request is using the POST method
		// This is where you will call the validation code
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$dateofbirth = $_POST['dateofbirth'];
		$movies = $_POST['movies'];
		$gender = !empty($_POST['gender']) ? $_POST['gender'] : '';

		// php functions
		$errors['name'] = validateName($name);
		$errors['address'] = validateAddress($address);
		$errors['email'] = validateEmail($email);
		$errors['age'] = validateAge($age);
		$errors['dateofbirth'] = validateBirthday($dateofbirth);
		$errors['movies'] = validateMovies($movies);
		$errors['gender'] = validateGender($gender);

		// dd($_POST);
		
		$formcontent=" From: $name \n Email: $email \n Message: $address";
  		$recipient = "sawyerbecky13@gmail.com";
  		$subject = "Website Form Submission";
  		$mailheader = "From: $email \r\n";
  		mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
  		require 'thanks.php';
  		die();
	}

	require 'partials/header.php';
	require 'partials/form.php';
	require 'partials/footer.php';