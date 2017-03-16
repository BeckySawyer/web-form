<?php 
require 'partials/header.php';
$name = $_POST['name']; 
$email = $_POST['email']; 
?>

<div class="container">
	<div class="card-panel grey lighten-5">
		<h2>Thanks for the info, <?= $name ?>.</h2>
		<h3> We'll contact you on <?= $email ?> if we have any further queries. </h3>
		<a href="index.php"> complete again? </a>
	</div>
</div>

<?php require 'partials/footer.php'; ?>