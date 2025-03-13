document.addEventListener("DOMContentLoaded", function () {
    // Common function to display error messages
    function displayError(message) {
        const errorMessage = document.getElementById("error-message");
        if (errorMessage) {
            errorMessage.textContent = message;
        }
    }

    // Registration Form Validation
    const registrationForm = document.getElementById("registration-form");
    if (registrationForm) {
        registrationForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Clear previous error messages
            displayError("");

            // Get form data
            const name = document.getElementById("name").value;
            const dob = document.getElementById("dob").value;
            const mobile = document.getElementById("mobile").value;
            const aadhar = document.getElementById("aadhar").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Basic validation
            if (!name || !dob || !mobile || !aadhar || !email || !password) {
                displayError("Please fill in all fields.");
                return;
            }

            // Simulate an API call for registration (replace this with actual API call)
            fakeApiRegister(name, dob, mobile, aadhar, email, password)
                .then(response => {
                    if (response.success) {
                        // Redirect to the login page on successful registration
                        window.location.href = "login.html";
                    } else {
                        displayError(response.message);
                    }
                })
                .catch(err => {
                    displayError("An error occurred. Please try again.");
                    console.error(err);
                });
        });
    }

    // Login Form Validation
    const loginForm = document.getElementById("login-form");
    if (loginForm) {
        loginForm.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Clear previous error messages
            displayError("");

            // Get form data
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Basic validation
            if (!email || !password) {
                displayError("Please fill in all fields.");
                return;
            }

            // Simulate an API call for login (replace this with actual API call)
            fakeApiLogin(email, password)
                .then(response => {
                    if (response.success) {
                        // Redirect to the dashboard or home page on successful login
                        window.location.href = "dashboard.html"; // Change to your desired page
                    } else {
                        displayError(response.message);
                    }
                })
                .catch(err => {
                    displayError("An error occurred. Please try again.");
                    console.error(err);
                });
        });
    }

    // Simulated API registration function (for demonstration purposes)
    function fakeApiRegister(name, dob, mobile, aadhar, email, password) {
        return new Promise((resolve) => {
            // Simulate a delay for the API call
            setTimeout(() => {
                // Simulate a successful registration
                resolve({ success: true });
            }, 1000);
        });
    }

    // Simulated API login function (for demonstration purposes)
    function fakeApiLogin(email, password) {
        return new Promise((resolve) => {
            // Simulate a delay for the API call
            setTimeout(() => {
                // Simulate a successful login for a specific email and password
                if (email === "user@example.com" && password === "password123") {
                    resolve({ success: true });
                } else {
                    resolve({ success: false, message: "Invalid email or password." });
                }
            }, 1000);
        });
    }
});
