<?php
	require 'includes/functions.php';

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		// The request is using the POST method
		// This is where you will call the validation code
		dd($_POST);
	}
	require 'partials/header.php';
	require 'partials/form.php';
	require 'partials/footer.php';
	?>