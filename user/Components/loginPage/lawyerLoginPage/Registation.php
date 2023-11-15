<?php
require '../../../connectdatabase/connect.php';


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $category=$_POST["category"];

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
    else if(empty($category))
    {
        $error='please Enter your type ...';

    }
    else{
        $x=1;
        $q=mysqli_query($connect,"select email from adminregistation");
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
            $query=mysqli_query($connect,"insert into adminregistation(username,email,password,category) 
            values('$username','$email','$password','$category')");
            header('Location:./lawyerLoginpage.php');
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
                <a href="./lawyerLoginpage.php" style="text-decoration: none;" class="changeBtn">SIGN IN</a>
            </div>
            <img src="../../../Assists/logo/lawyer.jpg" alt="">
        </div>

        <!-- RIGHT DIV -->
        <div class="fillDetail">

            <!-- CREATE ACCOUNT FILL DETAIL -->
            <form action="" method="post">
                <div class="createAccount">
                    <h1>Create Account</h1>
                    <p>use your email for registration:</p>
                    <div class="fillCredential">

                        <input type="name" name="username" id="name" placeholder="Enter Your Name" required>
                        <input type="email" name="email" placeholder="Enter Your Email" id="email" required>
                        <input type="password" name="password" id="password" placeholder="Enter password" required>

                        <div>
                            <select name="category"  id="select" required>
                                <option value="">Choice your Type</option>
                                <option value="Environmental Lawyer">Environmental Lawyer</option>
                                <option value="Family Lawyer">Family Lawyer</option>
                                <option value="Corporate Lawyer">Corporate Lawyer</option>
                                <option value="Civil Lawyer">Civil Lawyer</option>
                                <option value="Intellectual Property Lawyer">Intellectual Property Lawyer</option>
                                <option value="Tax Lawyer">Tax Lawyer</option>
                                <option value="Cyber Lawyer">Cyber Lawyer</option>
                                <option value="Estate Planning Lawyer">Estate Planning Lawyer</option>
                                <option value="Workers Compensation Lawyer">Workers Compensation Lawyer</option>
                                <option value="Public Interest Lawyer">Public Interest Lawyer</option>
                                <option value="Medical Malpractice Lawyer">Medical Malpractice Lawyer</option>
                                <option value="Merger and Acquisition Lawyer">Merger and Acquisition Lawyer</option>
                                <option value="Labour Lawyer">Labour Lawyer</option>
                                <option value="Bankruptcy Lawyer">Bankruptcy Lawyer</option>
                                <option value="Securities Lawyer">Securities Lawyer</option>
                                <option value="Military Lawyer">Military Lawyer</option>
                                <option value="Contract Lawyer">Contract Lawyer</option>
                                <option value="Government Lawyer">Government Lawyer</option>
                                <option value="Immigration Lawyer">Immigration Lawyer</option>
                            </select>
                        </div>

                    </div>
                    <p style='color:red;'><?php  echo isset($error) ? $error :''?></p>
                    <input type="submit" name="submit" class="signUpBtn" style="text-align: center;" value='SIGN UP' required>
                </div>
            </form>
        </div>
    </div>

</body>

</html>