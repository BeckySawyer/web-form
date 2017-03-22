<?php 
require 'partials/header.php';
$name = $_POST['name']; 
$email = $_POST['email']; 
?>

<div class="container">
	<div class="card-panel">
		<h1>Thanks for the info, <span><?= $name ?></span>.</h1>
		<h2> We'll contact you on <span><?= $email ?></span> if we have any further queries. </h2>
		<a href="index.php" class="complete waves-effect waves-light btn"> complete again? </a>
	</div>
</div>

<?php require 'partials/footer.php'; ?>