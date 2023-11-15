<?php
 
session_start();
$name = $_SESSION['variable_name_3'] ;
$email = $_SESSION['variable_name_4'];

require '../../connectdatabase/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link rel="stylesheet" href="../../designCSS/lawyer.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="./logo/LegalAssist.png">
    <script src="https://kit.fontawesome.com/5598f0038c.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="../../designCSS/lawyerBooking.css">
<link rel="stylesheet" href="../../designCSS/navbar.css">

<body>
    <div class="navbar">
        <div class="right-nav">
          <a href="./HomePage.php"><img width="50" src="../../Assists/logo/LegalAssist-Transparent.png" alt="" /></a>
          <h4>Legal Assist</h4>
        </div>
        <div class="nav">
          <a href="./HomePage.php">
            <p>Home</p>
          </a>
          <p></p>
          <a href="./lawyer.php">
            <p>Find A Lawyer</p>
          </a>
          <p></p>
          <a href="./userBooking.php">
            <p>My Bookings</p>
          </a>
          <p></p>
          <p>
            <i class="fa-regular fa-user" style="color: #d043b6"></i>&nbsp;&nbsp;<span id="profile"><?php if($email){echo $name;} else{echo 'Profile';} ?></span>
          </p>
          <p></p>
          <div id="signup-logout-btn">
            <a id="signup" class="signup" style="color: #fff;" href="../logout/logout.php">Sign Out</a>
          </div>
          <div id="space"></div>
        </div>
      </div>



    <h1>My Bookings</h1>
    <div id="bookingList">

    <?php
      $q=mysqli_query($connect,"select * from booking where layeremail='$email'");
      
      while($r=mysqli_fetch_array($q))
      {
        $clint=mysqli_query($connect,"select * from user_registation where email='{$r['useremail']}' ");
        $clintname=mysqli_fetch_array($clint);

        $timedate=mysqli_query($connect,"select * from timeanddate where id='{$r['timedateid']}'");
        $datetime=mysqli_fetch_array($timedate);
      ?>
      <h3>clint: <?php echo $clintname['username']; ?></h3>
      <h3>Time: <?php echo $datetime['time']; ?></h3>
      <h3>Date: <?php echo $datetime['date']; ?></h3>
      <p>Description: <?php echo $r['massege']; ?></p>
      <hr>
      <?php
      }
      ?>

    
    </div>
</body>


</html>