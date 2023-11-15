<?php
require '../../../connectdatabase/connect.php';

if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    $flag=1;
    $query=mysqli_query($connect,"select * from adminregistation");
    while($row=mysqli_fetch_array($query))
    {
     
        if(  $email==$row['email'] )
        {
            if($password==$row['password'])
            {
                session_start();
                $_SESSION['variable_name_3'] = $row['username'];
                $_SESSION['variable_name_4'] = $row['email'];
                $flag=0;
                header('Location:../../page/lhomePage.php');
                break;
            }
            else{
                $flag=0;
                $error="Passwod is wrong please try again";
                break;
            }

        }
    }
    if( $flag==1)
    {
        $error="please sign up ....";
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
    <link rel="stylesheet" href="../css/lawyerLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="nav">
        <img src="../../../Assists/logo/LegalAssist.png" alt="">
        <p>Legal Assist</p>
    </div>

    <div class="container">
        <!-- LEFT DIV -->
        <div class="change">
            <div>
                <h1>WELCOME BACK</h1>
                <p>To keep connected with us please login with your prsonal info</p>
                <a href="./Registation.php" style="text-decoration: none;" class="changeBtn">SIGN UP</a>
            </div>
            <img src="../../../Assists/logo/lawyer.jpg" alt="">
        </div>

        <!-- RIGHT DIV -->
        <div class="fillDetail">

            <!-- CREATE ACCOUNT FILL DETAIL -->
            <div class="createAccount">
                <h1>Login Account</h1>
                <p>use your email for sign-in:</p>

                    <form method="post">
                        <div class="fillCredential">
                            <input type="email" name="email" placeholder="Enter Your Email" id="email" required>
                            <input type="password" name="password" id="password" placeholder="Enter password" required>
                        </div>
                        <p style='color:red;'><?php  echo isset($error) ? $error :''?></p>
                        <input type="submit" name="submit" class="signUpBtn" style="text-align: center;" value='SIGN IN' required>
                    </form>
                
            </div>
        </div>

</body>

</html>