<div class="container">

<form method="POST" action="index.php" onsubmit="return validate()" class="form-horizontal">

<div class="row">
<div class="col s6">
	<div class="input-field">
	<i class="material-icons prefix">account_circle</i>
	<input id="name" name="name" type="text" value="<?= !empty($name) ? $name : '' ?>" class="icon-prefix">
	<label for="name" class="icon-prefix"> Your name  <?= !empty($errors['name']) ? $errors['name'] : ''?> </label>
	<div id="nameError"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix">location_city</i>
	<textarea id="address" class="materialize-textarea" name="address"><?= !empty($address) ? $address : '' ?></textarea>
	<label for="address"> Your address  <?= !empty($errors['address']) ? $errors['address'] : ''?> </label>
	<div id="addressError"></div>
	</div>
	

	<div class="input-field">
	<i class="material-icons prefix">email</i>
	<input id="email" name="email" type="text" value="<?= !empty($email) ? $email : '' ?>">
	<label for="email"> Your email <?= !empty($errors['email']) ? $errors['email'] : ''?></label>
	<div id="emailError"></div>
	</div>
	</div>
	

	<div class="col s6">
	<div class="input-field">
	<i class="material-icons prefix">cake</i>
	<input id="age" name="age" type="number" min="1" value="<?= !empty($age) ? $age : '' ?>">
	<label for="age"> Your age <?= !empty($errors['age']) ? $errors['age'] : ''?></label>
	<div id="ageError"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix">today</i>
	<input id="dateofbirth" name="dateofbirth" type="date" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>" onchange="calculateAge()" class="datepicker">
	<label for="dateofbirth" class="form-label"> Your date of birth <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></label>
	</div>
	

	<div class="input-field">
	<i class="material-icons prefix">movie</i>
	<select id="movies" name="movies">
		<option value="movie1" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie1') echo 'selected="selected"'; ?>> Movie 1 </option>
		<option value="movie2" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie2') echo 'selected="selected"'; ?>> Movie 2 </option>
		<option value="movie3" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie3') echo 'selected="selected"'; ?>> Movie 3 </option>
	</select>
	<label for="movies" class="form-label"> <?= !empty($errors['movies']) ? $errors['movies'] : ''?></label>
	<div id="moviesError"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix">wc</i>
	<div class="radio-float"><input type="radio" id="male" name="gender" value="male" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>
	<label for="male">Male <?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </label>
	<input type="radio" id="female" name="gender" value="female" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>
	<label for="female"> Female <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
	</div>
	<div id="genderError"></div>
	</div>
	

	<button type="submit" id="submitButton" class="btn btn-primary"> Submit </button>
	<button type="reset" value="reset" id="clearFields" class="btn"> Clear </button>
	</div>
	</div>

</form>

</div>