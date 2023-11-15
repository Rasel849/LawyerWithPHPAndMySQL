<?php
 session_start();
 $name=$_SESSION['variable_name_3'] ;
 $email=$_SESSION['variable_name_4'] ;

 require "../../connectdatabase/connect.php";
 if (isset($_POST["submit"])) {
  $date=$_POST["date"];
  $time=$_POST["time"];
  $date = date('Y-m-d', strtotime($date));

  if(empty($date))
  {
      $error='please enter date';
  }
  else if(empty($time))
  {
      $error='please enter time';
  }

  else{
          $query=mysqli_query($connect,"insert into timeanddate(email,time,date) 
          values('$email','$time','$date')");
          header('Location:./lhomePage.php');
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Add Slots</title>
    <link rel="icon" type="image/x-icon" href="../../Assists/logo/LegalAssist.png" />
    <script src="https://kit.fontawesome.com/5598f0038c.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="../../designCSS/addSlots.css">
<link rel="stylesheet" href="../../designCSS/navbar.css">

<body>
    <div class="navbar">
        <div class="right-nav">
          <a href="./lhomePage.php"><img width="50" src="../../Assists/logo/LegalAssist-Transparent.png" alt="" /></a>
          <h5>Legal Assist Lawyer</h5>
        </div>
        <div class="nav">
          <a href="./lhomePage.php">
            <p>Home</p>
          </a>
          <p></p>
          <a href="./addSlots.php">
            <p>Add Slots</p>
          </a>
          <p></p>
          <a href="./lawyerBooking.php">
            <p>My Bookings</p>
          </a>
          <p></p>
          <p>
            <i class="fa-regular fa-user" style="color: #d043b6"></i>&nbsp;&nbsp;<span id="profile"><?php echo $name; ?></span>
          </p>
          <p></p>
          <div id="signup-logout-btn">
            <a id="signup" class="signup" style="color: #fff;" href="../logout/logout.php">Sign Out</a>
         </div>
          <div id="space"></div>
        </div>
      </div>

      <div>


    <h1>Add Slots</h1>
    
    <form action="" method="post">


    <div id="slotdetails">
        <div>
            <label for="time">
                <h3>Choose Time:</h3>
            </label>
            <input type="time" id="time" name="time">
        </div>
        <div>
            <label for="Appointment Data">
                <h3>Appointment Date:</h3>
            </label>
            <input type="date" id="date" name="date">
        </div>
    </div>
    <div>
    <p style='color:red;'><?php  echo isset($error) ? $error :''?></p>
        <input type="submit" id="bookSlot" name="submit" value="Confirm">
    </div>

  </form>
    <h2 id="response"></h2>
</body>

</html>
<!-- <script src="./addSlots.js"></script>
<script src="./Homepage.js"></script> -->