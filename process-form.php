<?php
// define variables and set to empty values
$name = $email = $feedback = '';
// Add data from form
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
// Next, we must do some validation to see if we got valid data
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $errors['name'] = "Name is required";
  }
  if (empty($_POST["email"])) {
    $errors['email'] = "Email is required";
  }
  else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Please enter a correct email";
  }
  if (empty($_POST["feedback"])) {
    $errors['feedback'] = "Feedback is required";
  }
  if (!empty($errors)) {
    require 'feedback.php';
    die();
  };
  // Here is where you would send an email or save to the database etc

$formcontent=" From: $name \n Email: $email \n Message: $feedback";
  $recipient = "sawyerbecky13@gmail.com";
  $subject = "Website Form Submission";
  $mailheader = "From: $email \r\n";
  mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
  saveFeedback ($dbh, $name, $email, $feedback);
  require 'thanks.php';
  die();
}