<?php
 
session_start();
$name = $_SESSION['variable_name_1'];
$email = $_SESSION['variable_name_2'];
$lemail = $_GET['lemail'];
require '../../connectdatabase/connect.php';
if (isset($_POST["submit"])) {

  $timedateid = $_POST["Slots"];
  $massege=$_POST["massege"];

  $query=mysqli_query($connect,"insert into booking(useremail,layeremail,timedateid,massege) 
    values('$email','$lemail','$timedateid','$massege')");

    $successful="Successfully booking";
  //   header('Location:./loginPage.php');

  // if(empty($username))
  // {
  //     $error='please enter username';
  // }
 
  // else{
  //   $query=mysqli_query($connect,"insert into booking(useremail,lemail,) 
  //   values('$email','$lemail','$')");
  //   header('Location:./loginPage.php');

  // }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Lawyer</title>
    <link rel="stylesheet" href="../../designCSS/lawyer.css">
    <link rel="icon" type="image/x-icon" href="../../Assists/logo/LegalAssist.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://kit.fontawesome.com/5598f0038c.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="../../designCSS/booking.css">
<link rel="stylesheet" href="../../designCSS/navbar.css">

<body>
    <div class="navbar">
        <div class="right-nav">
          <a href="./HomePage.php"><img width="50" src="../../Assists/logo/LegalAssist-Transparent.png" alt="" /></a>
          <h4>Justice</h4>
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

    <?php
      $q=mysqli_query($connect,"select * from adminregistation where email='$lemail'");
      $r=mysqli_fetch_array($q);
      $lawyerName=$r['username'];
      $type=$r['category'];
      
    ?>
    <h1 id="name"> <?php echo $lawyerName;?>
        </h2>
        <p id="type"><?php echo $type;?></p>

    
        <p id="decsription"></p>
        <div id="myBody">
            <div id="decsription">
                <h2>Lawyer Description</h3>
                    <p id="ld"></p>
            </div>
            <div id="Booking">
                <h2>Booking details</h3>
                    <form id="form" method="post">
                        <div>
                            <h3>Choose Slots:</h3>
                            <div id="slots">

                            <?php
                            $q=mysqli_query($connect,"select * from timeanddate where email='$lemail'");
                            while($r=mysqli_fetch_array($q))
                            {
                            ?>
                              <table>
                                <tr>
                                  <td> <input type="radio" name="Slots" value=<?php echo $r['id'];?>  required></td>
                                  <td><div><?php echo $r['time'];?></div></td>
                                  <td><div><?php echo $r['date'];?></div></td>
                                </tr>
                              </table>
                            <?php
                            }
                            ?>


                              <div id="Slot" >

                              </div>
                            </div>
                        </div>
                        <div>
                            <label for="desc">
                                <h3>Description</h3>
                            </label>
                            <textarea id="Description"  name="massege" cols="40" rows="5" required></textarea>
                        </div>
                        <div>
                            <div></div>
                            <div>
                              
                                <div></div><input type="submit" id="Submit" name="submit">
                            </div>

                        </div>
                    </form>
                 

            </div>
            
            
        </div>
        <p style='color:green;'><?php  echo isset($successful) ? $successful :''?></p>
</body>

</html>
