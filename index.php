<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
   body {
    background-color: #f8f9fa;
    background-image: url('p.jpg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

    .header {
      background-color:#00418E;
      padding: 20px;
      color: #fff;
    }
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }   
     .navbar {
  background-color: #343a40;
  color: #fff;
  padding: 20px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.navbar ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

.navbar li {
  margin-left: 10px;
}

.navbar a {
  color: #fff;
  text-decoration: none;
}

    .btn-login {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-login:hover {
      background-color: #0069d9;
    }

    .text-center a {
      color: #007bff;
      text-decoration: none;
    }

    .text-center a:hover {
      text-decoration: underline;
    }
  </style>
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
        window.location.href = "dashboard.php";
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
