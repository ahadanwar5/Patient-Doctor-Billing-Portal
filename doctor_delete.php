<?php

$servername = "localhost";
$username = "root";
$pass = "";
$db = "hospital";

$conn = new mysqli($servername, $username, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$del_contact = $_POST['del_contact'];

$querry = "select Contact_Number from doctor_portal where Contact_Number = '$del_contact'";
$result = mysqli_query($conn, $querry);

if (mysqli_num_rows($result) > 0) {
    $querry1 = "delete from doctor_portal where Contact_Number = '$del_contact' ";
    $send_querry1 = mysqli_query($conn, $querry1);
    echo "Patient Data against contact number " . $del_contact . " has been deleted.";
} else {
    echo "NO patient data found against contact number: " . $del_contact . ".";
}