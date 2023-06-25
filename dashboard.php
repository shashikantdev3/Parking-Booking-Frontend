<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Parking System - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard_style.css">
    <link rel="stylesheet" href="header-footer.css">
</head>
<body>
    
<body> <header class="header">
    <h1>Book Parking</h1>
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
        <h2>Parking Lots Available</h2>
        <?php include('dashboard_logic.php'); ?>
    </div>
    <footer class="footer">
        <p>&copy; 2023 Vehicle Parking. All rights reserved.</p>
    </footer>
</body>
</html>
