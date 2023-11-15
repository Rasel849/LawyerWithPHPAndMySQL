<?php
session_start();
$name=$_SESSION['variable_name_9'] ;
$email=$_SESSION['variable_name_10'] ;
require "../../connectdatabase/connect.php";
$flag=0;
if (isset($_POST["submit1"])) {
  $flag=1;

}
if (isset($_POST["submit2"])) {
  $flag=2;

}
if (isset($_POST["submit3"])) {
  $flag=3;

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Panel | Legal Assist</title>
    <link rel="stylesheet" href="../../designCSS/admin.css" /> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/x-icon" href="../../Assists/logo/LegalAssist.png" />
  </head>
  <body>
    <div id="cont">
      <!-- Side Navbar Section -->
      <form method="post">
        <div class="sidebar">
          <input type="submit" name="submit1" id="userDetails" value="userDetails"/>
         
          <hr />
          <input type="submit" name="submit2" id="userDetails" value="Lawyer Details"/>
          <hr />
          <input type="submit"  name="submit3" id="userDetails" value="Show Bookings"/>
        </div>

      </form>
    </div>
    <!-- Dashboard Section -->
    <div id="header">
      <img src="../../Assists/logo/LegalAssist-Transparent.png" alt="logo" />
      <div></div>
    </div>
    <div id="title">
      <h1>Admin Panel</h1>
    </div>
    <!-- Notification Section -->
    <div id="empty">
      <div id="notification">
        <h2></h2>
      </div>
    </div>
    <?php
    if($email)
    {
      ?>
       <a id="lgtbtn" href="../logout/adminlogout.php" style="text-decoration: none;">Logout</a>
      
      <?php
    }
    else
    {
    ?>
   <a id="lgtbtn" href="../loginPage/Adminlogin/adminlog.php" style="text-decoration: none;">Login</a>
    <?php
    }
    ?>
    <!-- Main Body to show Data -->
    <div id="mainBody">

    <?php

    if($flag==0)

    {?>
      <!-- Showing this in Starting -->
      <div id="showLogo">
        <img src="../../Assists/logo/LegalAssist-Transparent.png" alt="" />
        <h1>Legal Assist</h1>
        <h1>Welcome to Admin Panel</h1>
      </div>
      <?php
     }
     elseif ($flag == 1 && $email) {
     ?>
      <!-- Showing User and Admin Detais  -->
      <div >
        <h1 style="color: white;">User Data</h1>
        <table style="width: 80%;  text-align: center; font-size: 30px; color: white;">
          <tr style="width: 80%;">
            <th style="width: 80%; padding-top: 20px; padding-bottom: 20px;">Name</th>
            <th style="width: 80%; padding-top: 20px; padding-bottom: 20px;">Email</th>
          </tr>
          <?php
          $q = mysqli_query($connect, "select username,email from user_registation");
          while ($r = mysqli_fetch_array($q)) {
               ?>
           <tr>
               <td style="width: 80%; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['username']; ?></td>
               <td style="width: 80%; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['email']; ?></td>
           </tr>
          <?php
           }
          
          ?>



        </table>
      </div>

      <?php
     }
     elseif ($flag == 2 && $email) {
      ?>


      <div >
        <h1 style="color: white;">Lawyer Data</h1>
        <table style="width: 80%;  text-align: center; font-size: 30px; color: white;">
          <tr style="width: 80%;">
            <th style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Name</th>
            <th style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Email</th>
            <th style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Types</th>
          </tr>
         <?php
          $q = mysqli_query($connect, "select username,email,category from adminregistation");
          while ($r = mysqli_fetch_array($q)) {
              ?>
              <tr>
                  <td style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['username']; ?></td>
                  <td style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['email']; ?></td>
                  <td style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['category']; ?></td>
              </tr>
              <?php
          }
         ?>
    

        </table>
      </div>

      <?php

        }

        elseif($flag==3 && $email)
        {

      ?>

      <div >
        <h1 style="color: white;">Show Bookings</h1>
        <table style="width: 80%;  text-align: center; font-size: 30px; color: white;">
          <tr style="width: 80%;">
            <th style="width: 20%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">User Name</th>
            <th style="width: 20%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Lawyer Email</th>
            <th style="width: 15%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Time/date</th>
            <th style="width: 80%;padding-left: 15px; padding-top: 20px; padding-bottom: 20px;">Massege</th>
          </tr>

          <?php
            $q=mysqli_query($connect,"
            SELECT user_registation.username as uname,adminregistation.username as lname,timeanddate.time as tm,timeanddate.date as dt,booking.massege as ms
            FROM booking
            JOIN user_registation ON booking.useremail= user_registation.email
            JOIN adminregistation ON booking.layeremail = adminregistation.email
            JOIN timeanddate ON booking.timedateid = timeanddate.id;

            ");
            while($r=mysqli_fetch_array($q))
            {
            ?>
          <tr>
            <td style="width: 20%;font-size:20px;padding-left: 5px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['uname'] ;?></td>
            <td style="width: 20%;font-size:20px;padding-left: 5px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['lname'] ;?></td>
            <td style="width: 15%;font-size:20px;padding-left: 5px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['tm'],"<br/>",$r['dt'] ;?> </td>
            <td style="width: 80%;font-size:20px;padding-left: 5px; padding-top: 20px; padding-bottom: 20px;"><?php echo $r['ms'] ;?></td>
          </tr>

          <?php
            }
           
          ?>
        </table>
      </div>
      <?php
        }
     else{
      ?>
      <div>
      <h1 style="color: red; text-align: center;">Please Login</h1>
     </div>
      <?php
     }
      ?>


    </div>
 
  </body>
</html>
