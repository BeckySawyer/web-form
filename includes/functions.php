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
}

function validateAddress($address) {
	if (empty($address)) {
    return "Address is required";
  }
}

function validateEmail($email) {
	if (empty($email)) {
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