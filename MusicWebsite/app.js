function validateForm(){
    let fname = document.forms["signup"]["fname"].value;
    if (fname.length < 2) {
        alert("Invalid Name");
        return false;
    }
    let ph_num = document.forms["signup"]["ph_number"].value;
    if (ph_num.length != 10) {
        alert("Invalid Contact Number");
        return false
    }
    let passvalue = document.forms["signup"]["password"].value;
    if (passvalue.length < 8 || passvalue.length > 15) {
        alert("Password should have 8-15 characters");
        return false;
    }
    let confirmPass = document.forms["signup"]["confirmPassword"].value;
    if (passvalue != confirmPass) {
        alert("Password does not match");
        return false
    }
}