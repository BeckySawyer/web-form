<div class="container" class="valign-wrapper">

<form method="POST" action="index.php" onsubmit="return validate()" class="form-horizontal">

<div class="card">
<div class="card-content">

 <div class="card-title">
 	<h1> WELCOME, </h1>
 	<h2> Are you ready for the most uninteresting form of your life? </h2>
 	<h3> High five to start! </h3>
 	<i class="large material-icons activator">pan_tool</i>
 </div>

</div>

<div class="card-reveal">
<div class="row">
	<div class="col s10 offset-s1">
	<div class="input-field">
	<i class="material-icons prefix">account_circle</i>
	<input id="name" name="name" type="text" value="<?= !empty($name) ? $name : '' ?>" class="icon-prefix <?= !empty($errors['name']) ? 'invalid' : ''?>" placeholder="Name">
	<label for="name" class="icon-prefix"> Your name   </label>
	<div id="nameError"><?= !empty($errors['name']) ? $errors['name'] : ''?></div>
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

	<div class="col s5 offset-s1">
	<div class="input-field">
	<i class="material-icons prefix">cake</i>
	<input id="age" name="age" type="number" value="<?= !empty($age) ? $age : '' ?>">
	<label for="age"> Your age <?= !empty($errors['age']) ? $errors['age'] : ''?></label>
	<div id="ageError"></div>
	</div>
	</div>

	<div class="col s5">
	<div class="input-field">
	<i class="material-icons prefix">today</i>
	<input id="dateofbirth" name="dateofbirth" type="date" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>"  class="datepicker" placeholder="##/##/####" onchange="calculateAge()">
	<label for="dateofbirth" class="form-label"> Your date of birth <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : ''?></label>
	</div>
	</div>

	<div class="col s10 offset-s1">
	<div class="input-field">
	<i class="material-icons prefix">movie</i>
	<select id="movies" name="movies">
		<option value="movie1" disabled selected> Select Movie </option>
		<option value="Die Hard" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Die Hard') echo 'selected="selected"'; ?>> Die Hard </option>
		<option value="Edward Scissorhands" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Edward Scissorhands') echo 'selected="selected"'; ?>> Edward Scissorhands</option>
		<option value="Finding Nemo" <?php if (!empty($_POST['movies']) && $_POST['movies'] == 'Finding Nemo') echo 'selected="selected"'; ?>> Finding Nemo </option>
	</select>
	<label for="movies" class="form-label"> <?= !empty($errors['movies']) ? $errors['movies'] : ''?></label>
	<div id="moviesError"></div>
	</div>


	<div class="input-field">
	<i class="material-icons prefix">wc</i>
	<div class="radio-float">
	<input type="radio" id="male" name="gender" value="male" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked="checked"'; ?>>
	<label for="male">Male <?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </label>
	<input type="radio" id="female" name="gender" value="female" class="with-gap" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked="checked"'; ?>>
	<label for="female"> Female <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
	</div>
	<div id="genderError"></div>
	</div>
	

	<button type="submit" id="submitButton" class="waves-effect waves-light btn"> <i class="material-icons left">send</i> Submit </button>
	<button type="reset" value="reset" id="clearFields" class="waves-effect waves-light btn"> <i class="material-icons left">clear</i>Clear </button>

</div>
</div>
</div>
</div>

</form>

</div>