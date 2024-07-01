<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$con = mysqli_connect("localhost", "root", "", "contact");

if (!$con) {
    echo mysqli_connect_error();
} else {
    $q = "insert into con values('$fname', '$lname', '$phone', '$email', '$subject', '$message')";
}
mysqli_query($con, $q);
$r = mysqli_affected_rows($con);
if ($r > 0) {
    echo "Thanks for contacting us";
    header("location:contact.html");
} else {
    echo "An error occurred";
}
