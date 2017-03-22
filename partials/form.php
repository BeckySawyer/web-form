<div class="container" class="valign-wrapper">

<div class="card hoverable">
<div class="card-content">

<h1> Please fill out the following: </h1>

<form method="POST" action="index.php" onsubmit="return validate()" class="form-horizontal">
<div class="row">

<!-- name -->
	<div class="input-field col s12">
	<i class="material-icons prefix">account_circle</i>
	<label for="name" class="icon-prefix"> Your name </label>
	<input id="name" name="name" type="text" value="<?= !empty($name) ? $name : '' ?>" class="icon-prefix" placeholder="First & Last Name" data-length="40">
	<div id="nameError"><?= !empty($errors['name']) ? $errors['name'] : ''?></div>
	</div>

<!-- address -->
	<div class="input-field col s12">
	<i class="material-icons prefix">location_city</i>
	<label for="address"> Your address </label>
	<textarea id="address" class="materialize-textarea" placeholder="Street, Suburb, City, Country" name="address" data-length="200"><?= !empty($address) ? $address : '' ?></textarea>
	<div id="addressError"><?= !empty($errors['address']) ? $errors['address'] : ''?></div>
	</div>
	
<!-- email -->
	<div class="input-field col s12">
	<i class="material-icons prefix">email</i>
	<label for="email"> Your email </label>
	<input id="email" name="email" placeholder="something@something.com" type="email" value="<?= !empty($email) ? $email : '' ?>" data-length="100">
	<div id="emailError"><?= !empty($errors['email']) ? $errors['email'] : ''?></div>
	</div>

<!-- age -->
	<div class="input-field col s6">
	<i class="material-icons prefix">cake</i>
	<label for="age"> Your age </label>
	<input id="age" name="age" type="number" placeholder="##" value="<?= !empty($age) ? $age : '' ?>">
	<div id="ageError"><?= !empty($errors['age']) ? $errors['age'] : ''?></div>
	</div>

<!-- birthday calendar -->
	<div class="input-field col s6">
	<i class="material-icons prefix">today</i>
	<label for="dateofbirth"> Your date of birth </label>
	<input id="dateofbirth" name="dateofbirth" type="date" value="<?= !empty($date) ? $date : '' ?>"  class="datepicker" placeholder="##/##/####" onchange="calculateAge()">
	<div id="dobError"><?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></div>
	</div>

<!-- movie selection -->
	<div class="input-field col s12">
	<i class="material-icons prefix">movie</i>
	<label for="movies" class="form-label"> </label>
	<select id="movies" name="movies">
		<option value="movie1" disabled selected> Select Movie </option>
		<option value="Die Hard" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Die Hard') echo 'selected="selected"'; ?>> Die Hard </option>
		<option value="Edward Scissorhands" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Edward Scissorhands') echo 'selected="selected"'; ?>> Edward Scissorhands</option>
		<option value="Finding Nemo" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Finding Nemo') echo 'selected="selected"'; ?>> Finding Nemo </option>
	</select>
	<div id="moviesError"><?= !empty($errors['movies']) ? $errors['movies'] : ''?></div>
	</div>

<!-- gender selection -->
	<div class="input-field col s12">
	<i class="material-icons prefix">wc</i>
	<div class="radio-float">
	<input type="radio" id="male" name="gender" value="Male" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked="checked"'; ?>>
	<label for="male"> Male </label>
	<input type="radio" id="female" name="gender" value="Female" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked"'; ?>>
	<label for="female"> Female </label>
	<input type="radio" id="other" name="gender" value="Other" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked"'; ?>>
	<label for="other"> Other </label>
	</div>
	<div id="genderError"> <?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </div>
	</div>
	
<!-- buttons -->
	<div class="col-s5 center-align">
	<button type="submit" id="submitButton" class="waves-effect waves-light btn"> <i class="material-icons left">send</i> Submit </button>
	</div>
	<div class="col-s5 center-align">
	<button type="reset" value="reset" onClick="window.location.reload();" id="clearFields" class="waves-effect waves-light btn"> <i class="material-icons left">clear</i>Clear </button>
	</div>

</div>

</form>

</div>