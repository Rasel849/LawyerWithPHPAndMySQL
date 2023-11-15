<?php
require '../../../connectdatabase/connect.php';


    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(empty($username))
        {
            $error='please enter username';
        }
        else if(empty($email))
        {
            $error='please enter email';
        }
        else if(empty($password))
        {
            $error='please enter password';
        }
        else{
            $x=1;
            $q=mysqli_query($connect,"select email from user_registation");
            while($r=mysqli_fetch_array($q))
            {
              if($email==$r['email'])
                  {
                    $x=0;
                    break;
                  }
                }
                if($x==0)
                {
                  $error="already this email use to registration";
                }
          
            else{
                $query=mysqli_query($connect,"insert into user_registation(username,email,password) 
                values('$username','$email','$password')");
                header('Location:./loginPage.php');
            }

        }

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-PAGE</title>
    <link rel="icon" type="image/x-icon" href="../../../Assists/logo/LegalAssist.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
    <link rel="stylesheet" href="../css/loginPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="nav">
        <img src="../../../Assists/logo/LegalAssist.png" class="navImg" alt="">
        <p>Legal Assist</p>
    </div>
    <div class="container">
        <!-- LEFT DIV -->
        <div class="change">
            <div>
                <h1>WELCOME BACK</h1>
                <p>To keep connected with us please login with your prsonal info</p>
                <a href="./loginPage.php" style="text-decoration: none;" class="changeBtn">SIGN IN</a>
            </div>
            <img src="../../../Assists/logo/login.jpg" alt="">
        </div>

        <!-- RIGHT DIV -->
        <div class="fillDetail">

            <!-- CREATE ACCOUNT FILL DETAIL -->
            <div class="createAccount">
                <h1>Create Account</h1>
                <p>use your email for registration:</p>
                <form method="post">
                    <div class="fillCredential">
                        <input type="name" name="username" id="name" placeholder="Enter Your User Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" id="email" required>
                        <input type="password" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <p style='color:red;'><?php  echo isset($error) ? $error :''?></p>
                    <input type="submit" name="submit" class="signUpBtn" style="text-align: center;" value='SIGN UP' required>
                </form>

                <p>If You are Lawyer ? <a href="../lawyerLoginPage/Registation.php">Click here!</a></p>
            </div>
        </div>
    </div>

</body>

</html>