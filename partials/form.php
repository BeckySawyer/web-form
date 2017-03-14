<div class="container">

<form method="POST" action="index.php" onsubmit="return validate()" class="form-horizontal">
	<div class="form-group">
	<div class="col-3">
	<label for="name" class="form-label"> Your name  <?= !empty($errors['name']) ? $errors['name'] : ''?> </label>
	</div>
	<div class="col-9">
	<input id="name" name="name" type="text" placeholder="Enter name" value="<?= !empty($name) ? $name : '' ?>" class="form-input">
	<div id="nameError"></div>
	</div>
	</div>


	<div class="form-group">
	<div class="col-3">
	<label for="address" class="form-label"> Your address  <?= !empty($errors['address']) ? $errors['address'] : ''?> </label>
	</div>
	<div class="col-9">
	<textarea id="address" class="form-input" name="address" placeholder="Enter address"><?= !empty($address) ? $address : '' ?></textarea>
	<div id="addressError"></div>
	</div>
	</div>
	

	<div class="form-group">
	<div class="col-3">
	<label for="email" class="form-label"> Your email <?= !empty($errors['email']) ? $errors['email'] : ''?></label>
	</div>
	<div class="col-9">
	<input id="email" class="form-input" name="email" type="text" placeholder="Enter email" value="<?= !empty($email) ? $email : '' ?>">
	<div id="emailError"></div>
	</div>
	</div>
	

	<div class="form-group">
	<div class="col-3">
	<label for="age" class="form-label"> Your age <?= !empty($errors['age']) ? $errors['age'] : ''?></label>
	</div>
	<div class="col-9">
	<input id="age" class="form-input" name="age" type="number" min="1" placeholder="##" value="<?= !empty($age) ? $age : '' ?>">
	<div id="ageError"></div>
	</div>
	</div>
	

	<div class="form-group">
	<div class="col-3">
	<label for="dateofbirth" class="form-label"> Your date of birth <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></label>
	</div>
	<div class="col-9">
	<input id="dateofbirth" name="dateofbirth" type="date" placeholder="##/##/####" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>" onchange="calculateAge()">
	</div>
	</div>
	

	

	<label for="movies" class="form-label"> Choose your favourite movie <?= !empty($errors['movies']) ? $errors['movies'] : ''?></label>
	<select id="movies" name="movies">
		<option value="movie1" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie1') echo 'selected="selected"'; ?>> Select Movie </option>
		<option value="movie2" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie2') echo 'selected="selected"'; ?>> Movie 1 </option>
		<option value="movie3" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie3') echo 'selected="selected"'; ?>> Movie 2 </option>
		<option value="movie4" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie4') echo 'selected="selected"'; ?>> Movie 3 </option>
	</select>
	<div id="moviesError"></div>

	
	<input type="radio" id="male" name="gender" value="male" <?php if (!empty($_POST['gender']) && $_POST['male'] == 'male') echo 'checked="checked"'; ?>>
			<label for="male">Male<?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>

			<input type="radio" id="female" name="gender" value="female" <?php if (!empty($_POST['gender']) && $_POST['female'] == 'female') echo 'checked="checked"'; ?>>
			<label for="female">Female<?= !empty($errors['female']) ? $errors['female'] : '' ?></label>
	
			<div id="genderError"></div>
	

	<button type="submit" id="submitButton" class="btn btn-primary"> Submit </button>
	<button type="reset" value="reset" id="clearFields" class="btn"> Clear </button>
</form>

</div>