<?php
session_start();
$name = $_SESSION['variable_name_1'];
$email = $_SESSION['variable_name_2'];
$lemail = $_GET['lemail'];

require '../../../../connectdatabase/connect.php';

$query = mysqli_query($connect, "INSERT INTO booking (useremail, lemail) VALUES ('$email', '$lemail')");

if ($query) {
    // The query was successful
    header('Location: ../../lawyer.php');
} else {
    // There was an error in the query
    echo "Error: " . mysqli_error($connect);
}

mysqli_close($connect);
?>