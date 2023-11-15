<?php
session_start();
$name= $_SESSION['variable_name_1'];
$email=$_SESSION['variable_name_2'];

require '../../connectdatabase/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Lawyer</title>
    <link rel="icon" type="image/x-icon" href="../../Assists/logo/LegalAssist.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://kit.fontawesome.com/5598f0038c.js" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="../../designCSS//Lawyer.css">
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
                <i class="fa-regular fa-user" style="color: #d043b6"></i>&nbsp;&nbsp;<span id="profile"><?php echo $name; ?></span>
            </p>
            <p></p>
            <div id="signup-logout-btn">
            <a id="signup" class="signup" style="color: #fff;" href="../logout/logout.php">Sign Out</a> 
            </div>
            <div id="space"></div>
        </div>
    </div>
    <div id="LawyerBar">
        <div id="searchBox">
            <input class="searchInput" contenteditable="true" placeholder="Search Lawyer..." id="inputBox"></input>
            <button id="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="dropdown">
            <button onclick="toggle()" class="dropbtn" id="filter">Filter By Type</button>
            <div id="myDropdown" class="dropdown-content">
                <button onclick="toggle()">Environmental Lawyer</button><br>
                <button onclick="toggle()">Family Lawyer</button><br>
                <button onclick="toggle()">Corporate Lawyer</button><br>
                <button onclick="toggle()">Civil Lawyer</button><br>
                <button onclick="toggle()">Intellectual Property Lawyer</button><br>
                <button onclick="toggle()">Tax Lawyer</button><br>
                <button onclick="toggle()">Cyber Lawyer</button><br>
                <button onclick="toggle()">Estate Planning Lawyer</button><br>
                <button onclick="toggle()">Workers Compensation Lawyer</button><br>
                <button onclick="toggle()">Public Interest Lawyer</button><br>
                <button onclick="toggle()">Medical Malpractice Lawyer</button><br>
                <button onclick="toggle()">Merger and Acquisition Lawyer</button><br>
                <button onclick="toggle()">Labour Lawyer</button><br>
                <button onclick="toggle()">Bankruptcy Lawyer</button><br>
                <button onclick="toggle()">Securities Lawyer</button><br>
                <button onclick="toggle()">Military Lawyer</button><br>
                <button onclick="toggle()">Contract Lawyer</button><br>
                <button onclick="toggle()">Government Lawyer</button><br>
                <button onclick="toggle()">Immigration Lawyer</button><br>
            </div>
        </div>
    </div>
    <div id="heading">
        <h2></h2>
        <h2>Name</h2>
        <h2>Type</h2>
    </div>
    <div id="LawyerList">
        <?php
        $q=mysqli_query($connect,"select * from adminregistation");
        while($r=mysqli_fetch_array($q))
        {
            ?>

        <div class="Lawyer">
            <div></div>
            <h3><?php echo $r['username'];?></h3>
            <h3><?php echo $r['category']; ?></h3>
            
            <a class="bookfor"href="./booking.php?lemail=<?php echo $r['email']; ?>" >Book Now</a>
        </div>          


          <?php
        }


        ?>

    </div>
    <!-- <script src="./Lawyer.js"></script> -->
    
</body>

</html>