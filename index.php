<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="header-footer.css">
</head>

</head>
<body>
<header class="header">
    <h1>Vehicle Parking System</h1>
  </header>

  <nav class="navbar">
    <ul>
      <li><a href="aboutus.php" class="home">About Us</a></li>
      <li><a href="profile.php" class="home">Profile</a></li>
      <li><a href="dashboard.php" class="home">Book Parking</a></li>
      <li><a href="givefeedback.php" class="home">Feedback</a></li>
      <li><a href="contactus.php" class="home">Contact us</a></li>
      <li><a href="fee.php" class="home">Payment</a></li>
    </ul>
  </nav>

  <div class="container">
    <div class="login-container">
      <h2>Login</h2>
      <form method="post" action="signin.php">
  <div class="form-group">
    <label for="mail">Email</label>
    <input type="text" id="mail" class="form-control" name="mail" placeholder="Enter your email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" class="form-control" name="pass" placeholder="Enter your password" required>
  </div>
  <button type="submit" class="btn btn-login">Login</button>
</form>


      <p class="text-center">Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
  </div>
  

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Function to handle the click event of the "Book Parking" button
    document.getElementById("bookParkingBtn").addEventListener("click", function() {
      // Check if user is logged in
      if (isLoggedIn()) {
        // Redirect to booking page
        window.location.href = "dashboard.html";
      } else {
        // Display a message to log in first
        alert("Please log in first to book a slot.");
      }
    });

    // Function to check if the user is logged in
    function isLoggedIn() {
      // Replace this with your own logic to check if the user is logged in
      // You can use cookies, local storage, or a server-side session to store and check the login status
      // For demonstration purposes, let's assume the user is logged in if the email field is not empty
      var email = document.getElementById("mail").value;
      return email !== "";
    }
  </script>
</body>
</html>
