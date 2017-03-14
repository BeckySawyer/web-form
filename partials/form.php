<div class="container" align="valign-wrapper">

<form method="POST" action="index.php" onsubmit="return validate()" class="form-horizontal">

<div class="card grey lighten-4">
<div class="card-content purple-text darken-3">
<div class="row">

<div class="col s6">
	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">account_circle</i>
	<input id="name" name="name" type="text" value="<?= !empty($name) ? $name : '' ?>" class="icon-prefix">
	<label for="name" class="icon-prefix"> Your name  <?= !empty($errors['name']) ? $errors['name'] : ''?> </label>
	<div id="nameError" class="black-text"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">location_city</i>
	<textarea id="address" class="materialize-textarea" name="address"><?= !empty($address) ? $address : '' ?></textarea>
	<label for="address"> Your address  <?= !empty($errors['address']) ? $errors['address'] : ''?> </label>
	<div id="addressError" class="black-text"></div>
	</div>
	

	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">email</i>
	<input id="email" name="email" type="text" value="<?= !empty($email) ? $email : '' ?>">
	<label for="email"> Your email <?= !empty($errors['email']) ? $errors['email'] : ''?></label>
	<div id="emailError" class="black-text"></div>
	</div>
	</div>
	

	<div class="col s6">
	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">cake</i>
	<input id="age" name="age" type="number" min="1" value="<?= !empty($age) ? $age : '' ?>">
	<label for="age"> Your age <?= !empty($errors['age']) ? $errors['age'] : ''?></label>
	<div id="ageError" class="black-text"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">today</i>
	<input id="dateofbirth" name="dateofbirth" type="date" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>" onchange="calculateAge()" class="datepicker">
	<label for="dateofbirth" class="form-label"> Your date of birth <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></label>
	</div>
	

	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">movie</i>
	<select id="movies" name="movies">
		<option value="movie1" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie1') echo 'selected="selected"'; ?> select disabled> Select Movie </option>
		<option value="movie2" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie2') echo 'selected="selected"'; ?>> Movie 1 </option>
		<option value="movie3" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie3') echo 'selected="selected"'; ?>> Movie 2 </option>
		<option value="movie4" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'movie4') echo 'selected="selected"'; ?>> Movie 3 </option>
	</select>
	<label for="movies" class="form-label"> <?= !empty($errors['movies']) ? $errors['movies'] : ''?></label>
	<div id="moviesError" class="black-text"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix purple-text darken-3">wc</i>
	<div class="radio-float"><input type="radio" id="male" name="gender" value="male" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>
	<label for="male">Male <?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </label>
	<input type="radio" id="female" name="gender" value="female" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>
	<label for="female"> Female <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
	</div>
	<div id="genderError" class="black-text"></div>
	</div>
	

	<button type="submit" id="submitButton" class="btn waves-effect purple darken-3"> <i class="material-icons left">send</i> Submit </button>
	<button type="reset" value="reset" id="clearFields" class="btn waves-effect purple darken-3"> <i class="material-icons left">clear</i>Clear </button>
</div>
</div>
</div>
</div>

</form>

</div>