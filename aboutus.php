<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aboutus_style.css">
    <link rel="stylesheet" href="header-footer.css">
    
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #00418E;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
            text-align: center;
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

.about-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

        .about-image {
    flex: 0 0 40%;
    padding-right: 10px;
    background-image: url('about.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

        .about-image img {
            width: 80%;
            height: auto;
        }

        .about-content {
            flex: 1;
        }

        .about-content p {
            margin-bottom: 20px;
        }

        .about-content .btn {
            background-color: #00418E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 700;
            transition: background-color 0.3s ease;
        }

        .about-content .btn:hover {
            background-color: #002C5C;
        }

        .footer {
            background-color: #F0F0F0;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header class="header">
        <h1>About Us</h1>
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
        <div class="section-title">Vehicle Parking</div>
        <div class="about-section">
            <div class="about-image">
                <!-- <img src="https://www.behance.net/gallery/24705683/Multi-level-Car-Parking-Architectural-photography" alt="About Us Image"> -->
            </div>
            <div class="about-content">
            <h3>BOOK YOUR SLOT FROM ANYWHERE ON OUR WEB APP</h3>
                <p>
                    This is a highly convenient and user-friendly responsive website that allows you to book your parking
                    slot from anywhere. Our web app provides real-time information on the availability of parking slots, so
                    you can plan your visit accordingly and avoid any inconvenience.
                </p>

                <h3>AUTO-GENERATED FEE</h3>
                <p>
                    Our website eliminates the need for manual calculations. It automatically generates the fee for your
                    parking based on your entry time and date. This feature provides transparency and allows car owners to
                    get an instant idea of the expected fee, ensuring a hassle-free parking experience.
                </p>

                <h3>SECURE DATABASE</h3>
                <p>
                    At Secure Parking India, we prioritize the security and integrity of your data. Our robust and
                    well-protected database ensures that there are no discrepancies in car entries and guarantees the
                    privacy of your information. We employ the latest web technologies to safeguard your data and provide
                    you with peace of mind.
                </p>

                <h3>EVERYTHING LINKED UP WITH YOUR REGISTERED ACCOUNT</h3>
                <p>
                    Our web app offers a seamless experience by linking all your parking activities to your registered
                    account. Once you log in, you can manage your bookings, view parking history, and make any necessary
                    changes without affecting other parked vehicles. This personalized approach ensures a smooth and
                    efficient parking process.
                </p>
                <a href="dashboard.php" class="btn">Book a Slot!!!</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 Vehicle Parking. All rights reserved.</p>
    </footer>
</body>

</html>
