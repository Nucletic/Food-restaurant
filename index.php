<?php
$seat = $_POST['seat'];
$date = $_POST['date'];
$time = $_POST['time'];
$phone = $_POST['phone'];

$con = mysqli_connect("localhost", "root",  "", "booking");

if (!$con) {
    echo mysqli_connect_error();
} else {
    $q = "insert into book values ('$seat', '$date', '$time', '$phone')";
}

mysqli_query($con, $q);

$r = mysqli_affected_rows($con);
if ($r > 0) {
    header("location:index.html");
} else {
    echo "An error occurred";
}
