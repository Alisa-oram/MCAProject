function validate(e) {
    try {
        let sicElement = document.getElementById("sic");
        let emailElement = document.getElementById("email");

        if (!sicElement || !emailElement) {
            console.log("Required input elements not found.");
            return;
        }

        let sic = sicElement.value;
        let email = emailElement.value;
        let error = false;

        let sicError = document.getElementById("sicError");
        let emailError = document.getElementById("emailError");

        let sicpat = /^[0-9]{2}[a-z]{4}[0-9]{2}$/i;
        if (!sic.match(sicpat)) {
            sicError.innerHTML = "SIC is not valid";
            error = true;
        } else {
            sicError.innerHTML = "";
        }

        let emailPat = /^[a-zA-Z0-9._%+-]{2,}\.\d{2}[a-zA-Z]{4}\d{2}@silicon\.ac\.in$/;
        if (!email.match(emailPat)) {
            emailError.innerHTML = "Please enter a valid email ID";
            error = true;
        } else {
            emailError.innerHTML = "";
        }

        if (error) {
            e.preventDefault();
        }
    } catch (error) {
        console.log("Validation Error: ", error);
    }
}
