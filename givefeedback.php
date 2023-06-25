<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="givefeedback_style.css">
    <link rel="stylesheet" href="header-footer.css">
</head>
<body> <header class="header">
    <h1>Feedback</h1>
  </header>

<nav class="navbar">
    <ul>
        <li><a href="aboutus.php" class="home">About Us</a></li>
        <li><a href="profile.php" class="home">Profile</a></li>
        <li><a href="dashboard.php" class="home">Book Parking</a></li>
        <li><a href="givefeedback.php" class="home">Feedback</a></li>
        <li><a href="contactus.php" class="home">Contact us</a></li>
        <li><a href="fee.php" class="home">Payment</a></li>
        <li id="loginLink"><a href="index.php" class="home">Sign Up | Login</a></li>
        <li id="logoutLink" style="display: none;"><a href="logout.php" class="home">Logout</a></li>
    </ul>
</nav>

<div class="container">
    <h2>How do you rate your overall experience?</h2>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="experience" id="radio_bad" value="bad">
        <label class="form-check-label text-danger" for="radio_bad">Bad</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="experience" id="radio_average" value="average">
        <label class="form-check-label text-warning" for="radio_average">Average</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="experience" id="radio_good" value="good">
        <label class="form-check-label text-success" for="radio_good">Good</label>
    </div>

    <h2>Leave a message:</h2>
    <textarea name="comment" id="comment"></textarea>

    <button class="btn-submit" type="submit">Submit</button>

    <div class="mt-5">
        <button class="btn-book" onclick="bookSlot()">Book a Slot</button>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Function to handle the book slot button click event
    function bookSlot() {
        // Replace this with your logic to redirect to the booking page
        window.location.href = "dashboard.php";
    }
// Function to handle the login link click event
function goToLogin() {
        window.location.href = "index.php";
    }

    // Function to handle the logout link click event
    function goToLogout() {
        // Perform logout operations, such as clearing the session or authentication token
        // Then, set isLoggedIn to false
        isLoggedIn = false;
        updateNavbar();
    }

    // Check if the user is logged in
    var isLoggedIn = false; // Set this value dynamically based on your login system

    // Update the visibility and click event of the links based on the login status
    function updateNavbar() {
        var loginLink = document.getElementById("loginLink");
        var logoutLink = document.getElementById("logoutLink");

        if (isLoggedIn) {
            loginLink.style.display = "none";
            logoutLink.style.display = "block";
            logoutLink.firstChild.textContent = "Logout";
            logoutLink.removeEventListener("click", goToLogin);
            logoutLink.addEventListener("click", goToLogout);
        } else {
            loginLink.style.display = "block";
            logoutLink.style.display = "none";
            loginLink.firstChild.textContent = "Sign Up | Login";
            loginLink.removeEventListener("click", goToLogout);
            loginLink.addEventListener("click", goToLogin);
        }
    }

    // Call the updateNavbar function initially
    updateNavbar();
</script>

</body>
</html>
