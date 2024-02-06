<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db = "hospital";

$conn = new mysqli($servername, $username, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST ['name'];
$email = $_POST ['email'];
$contact = $_POST ['contact'];
$time = $_POST ['time'];
$symptoms = $_POST['symptoms'];

$querry = "insert into patient_portal (Patient_Name,Email,Contact_Number,Appointment_Time,Symptoms) 
            values ('$name','$email','$contact','$time','$symptoms')";

$send_querry = mysqli_query($conn,$querry);

echo "Your appointment against contact number ".$contact." has been registered.";



