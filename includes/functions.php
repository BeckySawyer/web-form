<?php

// validates name so it isn't longer than 40 characters and has a space
function validateName($name) {
	if (empty($name)) {
    return "Name is required";
  }
 if (strlen($name) < 40 && !preg_match("/\s/", $name)) {
    return "Please enter a first and last name";
  }
  else {
    return false;
  }
}

// validates the address so that it isn't longer than 200 characters
function validateAddress($address) {
	if (empty($address)) {
    return "Address is required";
  }
 if (strlen($address) > 200) {
    return "Please enter a full address, no longer than 200 characters";
  }
  else {
    return false;
  }
}


// validates the email so it includes an @ and a .
function validateEmail($email) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    return "Email is required, must include @ and .";
  }
}


// validates the age so that there is a number inputted and it is not larger than 150 and is not smaller than 0
function validateAge($age) {
	if (empty($age)) {
    return "Age is required";
  }
  if((int)$age > 150) {
    return "Age can not be larger than 150";
  }
  else if((int)$age < 0) {
    return "You can't be not born!";
  }
  else {
  return false;
  }
}

// validates the date so it is a valid date
function validateDate($date) {
    if (empty($date)) {
        return "Date of Birth is required.";
    }
 
    if (!checkDateManually($date)) {
        return "Please enter a correct Date of Birth.";
    }
 
    if (DateTime::createFromFormat('Y-m-d', $date)) {
        $date = DateTime::createFromFormat('Y-m-d', $date);
    }
    else if (DateTime::createFromFormat('Y/m/d', $date)) {
        $date = DateTime::createFromFormat('Y/m/d', $date);
    }
    else if (DateTime::createFromFormat('d-m-Y', $date)) {
        $date = DateTime::createFromFormat('d-m-Y', $date);
    }
    else if (DateTime::createFromFormat('d/m/Y', $date)) {
        $date = DateTime::createFromFormat('d/m/Y', $date);
    }
    else {
        return "Please enter a correct Date of Birth.";
    }
 
    $time = new DateTime('now');
    $today = new DateTime('now');
 
    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));
 
    $chosenDate = $date->format('Y-m-d');
    $chosenDay = $date->format('d');
    $chosenMonth = $date->format('m');
    $chosenYear = $date->format('Y');
    $todaysDate = $today->format('Y-m-d');
    $minDate = $date150YearsAgo->format('Y-m-d');
 
    if ($chosenDate <= $minDate){
        return "The date can not be more than 150 years ago.";
    }
    else if ($chosenDate >= $todaysDate){
        return "The date can't be after today.";
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return "Please enter a correct Date of Birth.";
    }
 
    return false;
}
 
// validates the date so it is a valid date
function checkDateManually($date) {
    $dateArray = [];
 
    if(strpos($date, '/') !== false) {
        $dateArray = explode("/", $date);
    }
    else if(strpos($date, '-') !== false){
        $dateArray = explode("-", $date);
    }
 
    if (empty($dateArray)) {
        return false;
    }
 
    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
            return true;
        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
            return true;
        }
        return false;
    }
 
    return false;
}

// validates the movie so there is one selected
function validateMovies($movies) {
	if ($movies == '') {
    return "Movie selection is required";
  }
}


// validates the gender so there is a gender selected
function validateGender($gender) {
	if (empty($gender)) {
    return "Gender selection is required";
  }
}

function dd($data) {
 die(var_dump($data));
}

// converts ' and " into the characters
function e($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}