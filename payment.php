<?php
session_start();
include('config.php');
include('sessioncheck.php');
?>

         <?php
          $fee = $_POST['fee'];
          $id = $_POST['id'];
          ?>
          <div class="form__div">
          <label class="form__label">Card Number</label>
            <input class="input100" type="text" name="card" placeholder="Card Number" required="required" />
            <span class="focus-input100"></span>

          </div>

          <div class="form__div">
            <input class="input100" type="text" name="fee" value="<?php echo $fee; ?>" readonly />
            <span class="focus-input100"></span>
            <label class="form__label">Amount to be paid</label>
          </div>
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="container-login100-form-btn m-t-17">
            <button class="btn1" type="submit">
              Pay
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="header-footer.css">
    <link rel="stylesheet" href="payment_style.css">
</head>
<body>
<header class="header">
    <h1>Payment</h1>
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

<form class="fee" method="post" action="paycom.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="Enter Full Name"  required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Enter Email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="Enter room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="Enter City" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="Enter State" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="Enter Zip Code" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.jpg" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="Enter Name on Card" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="Enter Credit Card Number" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="Enter Expiry Month" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="Enter Expiry Year" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="Enter CVV" required>
                    </div>
                    
                </div>
                <!-- <div class="form__div">
                <label class="form__label">Amount to be paid: </label>
            <input class="inputBox" type="text" name="fee" value="<?php echo $fee; ?>" readonly />
            <span class="focus-input100"></span>
      
          </div> -->
          <input type="hidden" name="id" value="<?php echo $id; ?>">

            </div>
    
        </div>
      
        <input type="submit" value="Pay $<?php echo $fee; ?> " class="submit-btn">

    </form>

</div>    
    
</body>
</html>