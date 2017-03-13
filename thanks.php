<?php 
require 'partials/header.php';
$name = $_POST['name']; 
?>

<div class="empty">
<h2 class="empty-title">Thanks for the feedback <?= $name ?></h2>
</div>

<?php require 'partials/footer.php'; ?>