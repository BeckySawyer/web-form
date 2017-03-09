<?php

function dd($data) {
 die(var_dump($data));
}

function e($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function validateName($name) {
	if (empty($name)) {
    return "Name is required";
  }
  if (strlen($name) > 40 || !preg_match("/\s/", $name)) {
    return "Please enter full name";
  }
  else {
    return false;
  }
}

function validateAddress($address) {
	if (empty($address)) {
    return "Address is required";
  }
  if (strlen($name) > 200) {
    return "Please enter a full address";
  }
  else {
    return false;
  }
}

function validateEmail($email) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    return "Email is required";
  }
}

function validateAge($age) {
	if (empty($age)) {
    return "Age is required";
  }
}

function validateBirthday($dateofbirth) {
	if (empty($dateofbirth)) {
    return "Date of birth is required";
  }
}

function validateMovies($movies) {
	if ($movies == 'movie1') {
    return "Movie is required";
  }
}

function validateGender($gender) {
	if (empty($gender)) {
    return "Gender is required";
  }
}

// make a function to have the date valid
// make a function to minus input date by current date to make sure age is valid

