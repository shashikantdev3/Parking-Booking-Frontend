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
    .header {
      background-color:#00418E;
      padding: 20px;
      color: #fff;
    }
    body {
    background-color: #f8f9fa;
    background-image: url('p.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
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
      <h2>Sign-up</h2>
      <form class="fee" method="post" action="register.php">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Full Name</label>
              <input class="form-control" type="text" name="name" placeholder="Name..." required="required">
            </div>

            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="email" name="email" placeholder="Email address..." required="required">
            </div>

            <div class="form-group">
              <label>Contact</label>
              <input class="form-control" type="number" name="contact" placeholder="Mobile no...." required="required">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Registration date</label>
              <input class="form-control" type="date" name="registrationdate" placeholder="Registration date" required="required">
            </div>

            <div class="form-group">
              <label>Address</label>
              <input class="form-control" type="text" name="address" placeholder="Address...." required="required">
            </div>

            <div class="form-group">
              <label>Aadhar No.</label>
              <input class="form-control" type="number" name="aadhar" placeholder="Aadhar no...." required="required">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" type="password" name="pass" placeholder="*************" required="required">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Repeat Password</label>
              <input class="form-control" type="password" name="repass" placeholder="*************" required="required">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" id="ckb1" type="checkbox" name="remember-me" required="required">
            <label class="form-check-label" for="ckb1">
              I agree to the <a href="#" class="text-primary">Terms of Use</a>
            </label>
          </div>
        </div>

        <div class="container-login100-form-btn">
          <button class="btn btn-primary btn-login">Submit</button>
        </div>

        <p class="text-center">
          Already have an account? <a href="index.php" class="text-primary">Sign in</a>
        </p>
      </form>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
