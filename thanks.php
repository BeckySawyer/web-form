<?php 
require 'partials/header.php';
$name = $_POST['name']; 
?>

<h2 class="text-center">Thanks for the feedback <?= $name ?></h2>
<div class="text-center">
  <a href="index.php">Home</a>
</div>

<?php require 'partials/footer.php'; ?>