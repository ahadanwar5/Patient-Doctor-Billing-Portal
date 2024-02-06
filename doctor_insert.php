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
$contact = $_POST ['contact'];
$symptoms = $_POST['symptoms'];
$diagnosis = $_POST ['diagnosis'];


$querry = "insert into doctor_portal (Patient_Name,Contact_Number,Symptoms,Diagnosis) 
            values ('$name','$contact','$symptoms','$diagnosis')";

$send_querry = mysqli_query($conn,$querry);

echo "The diagnosis data of Mr/Mrs ".$name." has been successfully saved.";



