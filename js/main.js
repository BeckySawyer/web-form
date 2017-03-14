   function validate() {
    var nameError = validateName();
    var addressError = validateAddress();
    var emailError = validateEmail();
    var moviesError = validateMovies();
    var genderError = validateGender();
    var ageError = validateDOB();
    if (nameError && addressError && emailError && moviesError && genderError && ageError) {
        return true;
    }
    return false;
}

function validateName() {
	name = document.getElementById('name').value;
    pos1 = name.indexOf(" ");
    if (pos1 >= 0 && name.length > 3 && name.length < 40) {
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
        document.getElementById('addressError').innerHTML = "Please enter a full address, no longer than 200 characters";
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
        document.getElementById('emailError').innerHTML = "Please enter a valid email address, must include @ and .";
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

function validateDOB() {
    var dateofbirth = document.getElementById('dateofbirth');
    var calculateAge = getAge(dateofbirth.value);
    var dob = document.getElementById('age').value;
    // document.getElementById('age').value = (getAge(document.getElementById('dateofbirth').value));
    if (calculateAge != dob || parseInt(dob) >= 150 || parseInt(dob) < 0) {
        document.getElementById('ageError').innerHTML = "Please enter a valid age, no more than 150";
        return false;
    }
    else {
        document.getElementById('ageError').innerHTML = "";
        return true;
    }
}

function getAge(dateOfBirth) {
    var today = new Date();
    var birthDate = new Date(dateOfBirth);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

// function validateAge() {
//     var dob = document.getElementById('dateofbirth');
//     var age = getAge(dateofbirth.value);
//     if (age != document.getElementById('age').value) {
//         alert("lol wrong")
//     }
// }

function calculateAge() {
    var dob = document.getElementById('dateofbirth');
    var age = getAge(dateofbirth.value);
    document.getElementById('age').value = age;
}

 $(document).ready(function() {
    $('select').material_select();
  });

   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 20 // Creates a dropdown of 15 years to control year
  });

   $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });