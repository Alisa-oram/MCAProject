function validate(e) {
    let name = document.querySelector("#name").value;
    let sic = document.querySelector("#sic").value;
    let sport = document.querySelector("#sport").value;
    let date = document.querySelector("#dob").value; // Fixed id
    let email = document.querySelector("#email").value;
    let dept = document.querySelector("#department").value;
    let year = document.querySelector("#year").value;
    let error = false;

    // Name Validation
    if (name === "") {
        document.querySelector("#nameError").innerHTML = "Name required";
        error = true;
    } else {
        document.querySelector("#nameError").innerHTML = "";
    }

    // SIC Validation (Order Fixed)
    let sicpat = /^[0-9]{2}[a-z]{4}[0-9]{2}$/i;
    if (sic === "") {
        document.querySelector("#sicError").innerHTML = "SIC required";
        error = true;
    } else if (!sic.match(sicpat)) {
        document.querySelector("#sicError").innerHTML = "SIC is not valid";
        error = true;
    } else {
        document.querySelector("#sicError").innerHTML = "";
    }

    // Sport Validation
    if (sport === "") {
        document.querySelector("#sportError").innerHTML = "Field cannot be empty";
        error = true;
    } else {
        document.querySelector("#sportError").innerHTML = "";
    }

    // Date of Birth Validation (Fixed id)
    if (date === "") {
        document.querySelector("#dateError").innerHTML = "Date required";
        error = true;
    } else {
        document.querySelector("#dateError").innerHTML = "";
    }

    // Email Validation (Order Fixed)
    let emailPat = /^[a-zA-Z0-9._%+-]{2,}\.\d{2}[a-zA-Z]{4}\d{2}@silicon\.ac\.in$/;
    if (email === "") {
        document.querySelector("#emailError").innerHTML = "Email is required";
        error = true;
    } else if (!email.match(emailPat)) {
        document.querySelector("#emailError").innerHTML = "Email is not valid";
        error = true;
    } else {
        document.querySelector("#emailError").innerHTML = "";
    }

    // Department Validation
    if (dept === "") {
        document.querySelector("#deptError").innerHTML = "Department is required";
        error = true;
    } else {
        document.querySelector("#deptError").innerHTML = "";
    }

    // Year Validation
    if (year === "") {
        document.querySelector("#yearError").innerHTML = "Year is required";
        error = true;
    } else {
        document.querySelector("#yearError").innerHTML = "";
    }

    if (error) {
        e.preventDefault();
    }
}
