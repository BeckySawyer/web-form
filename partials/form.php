<div class="container">

<form method="POST" action="index.php" onsubmit="return validate()">
	<div class="form-group">
	<label for="name" class="form-label"> Your name  <?= !empty($errors['name']) ? $errors['name'] : ''?> </label>
	<input id="name" name="name" type="text" placeholder="Enter name" value="<?= !empty($name) ? $name : '' ?>" class="form-input">
	<div id="nameError"></div>
	</div>


	<div class="form-group">
	<label for="address"> Your address  <?= !empty($errors['address']) ? $errors['address'] : ''?> </label>
	<textarea id="address" name="address" placeholder="Enter address"><?= !empty($address) ? $address : '' ?></textarea>
	<div id="addressError"></div>
	</div>
	

	<label for="email"> Your email <?= !empty($errors['email']) ? $errors['email'] : ''?></label>
	<input id="email" name="email" type="text" placeholder="Enter email" value="<?= !empty($email) ? $email : '' ?>">
	<div id="emailError"></div>

	

	<label for="age"> Your age <?= !empty($errors['age']) ? $errors['age'] : ''?></label>
	<input id="age" name="age" type="number" min="1" placeholder="##" value="<?= !empty($age) ? $age : '' ?>">
	<div id="ageError"></div>

	

	<label for="dateofbirth"> Your date of birth <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></label>
	<input id="dateofbirth" name="dateofbirth" type="date" placeholder="##/##/####" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>" onchange="calculateAge()">

	

	<label for="movies"> Choose your favourite movie <?= !empty($errors['movies']) ? $errors['movies'] : ''?></label>
	<select id="movies" name="movies">
		<option value="movie1" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie1') echo 'selected="selected"'; ?>> Select Movie </option>
		<option value="movie2" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie2') echo 'selected="selected"'; ?>> Movie 1 </option>
		<option value="movie3" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie3') echo 'selected="selected"'; ?>> Movie 2 </option>
		<option value="movie4" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie4') echo 'selected="selected"'; ?>> Movie 3 </option>
	</select>
	<div id="moviesError"></div>

	

	<label for="gender"> Gender <?= !empty($errors['gender']) ? $errors['gender'] : ''?></label>
	<input id="gender" name="gender" type="radio" value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>> Male
	<input id="gender" name="gender" type="radio" value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>> Female
	<div id="genderError"></div>

	

	<button type="submit" id="submitButton"> Submit </button>
	<button type="reset" value="reset" id="clearFields"> Clear </button>
</form>

</div>