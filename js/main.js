function validate() {
    validateName();
    validateAddress();
    validateEmail();
    validateMovies();
    validateGender();
    validateDateOfBirth();
    validaeAge();
    return false;
    document.getElementById('submitButton').submit();
}

function validateName() {
	name = document.getElementById('name').value;
    pos1 = name.indexOf(" ");
    if (pos1 >= 0 && name.length < 40) {
        document.getElementById('nameError').innerHTML = "";
        return true;
    }
    else {
        document.getElementById('nameError').innerHTML = "Please enter a first and last name";
        return false;
    }
}

function validateAddress() {
	address = document.getElementById('address').value;
    pos1 = address.indexOf(" ");
    if (pos1 >= 0 && address.length < 200) {
        document.getElementById('addressError').innerHTML = "";
        return true;
    }
    else {
        document.getElementById('addressError').innerHTML = "Please enter a full address";
        return false;
    }
}

function validateEmail() {
	emailAddress = document.getElementById('email').value;
    pos1 = emailAddress.indexOf("@");
    pos2 = emailAddress.indexOf(".");
    if (pos1 >= 0 && pos2 >= 0 && emailAddress.length < 100) {
        document.getElementById('emailError').innerHTML = "";
        return true;
    }
    else {
        document.getElementById('emailError').innerHTML = "Please enter a valid email address";
        return false;
    }
}

function validateMovies() {
	selectedMovie = document.getElementById('movies').selectedIndex;
	if (selectedMovie > 0) {
		document.getElementById('moviesError').innerHTML = "";
		return true;
	}
	else {
		document.getElementById('moviesError').innerHTML = "Please choose a movie";
		return false;
	}
}

function validateGender() {
    var selectedGender = document.getElementsByName('gender');
    var selectGender = document.getElementById('genderError').innerHTML = "";
    var i = 0;
    while (!selectGender && i < selectedGender.length) {
        if (selectedGender[i].checked) selectGender = true;
        i++;        
    }
    if (!selectGender) document.getElementById('genderError').innerHTML = 'Please select a gender';
    return selectGender;
}