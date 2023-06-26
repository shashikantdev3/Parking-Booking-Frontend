<?php
session_start();
 include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PROFILE VERIFICATION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="header-footer.css">
    <link rel="stylesheet" href="profile_style.css">
</head>

<body>
<header class="header">
        <h1>Get Your Profile</h1>
    </header>
    <nav class="navbar">
    <ul>
    <li><a href="aboutus.php" class="home">About Us</a></li>
                <li><a href="profile.php" class="home">Profile</a></li>
                <li><a href="dashboard.php" class="home">Book Parking</a></li>
                <li><a href="givefeedback.php" class="home">Feedback</a></li>
                <li><a href="contactus.php" class="home">Contact us</a></li>
                <li><a href="fee.php" class="home">Payment</a></li>
                <li><a href="logout.php" class="home">Logout</a></li>
    </ul>
  </nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="profile2.php">
                <div class="form-group">
                    <label for="email"><h2>Email</h2></label>
                    <input type="email" class="form-control" id="email" name="mail" required="required">
                </div>
                <button type="submit" class="btn btn-primary">Check profile</button>
            </form>
        </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <footer class="footer">
        <p>&copy; 2023 Vehicle Parking. All rights reserved.</p>
    </footer>
</body>

</html>
