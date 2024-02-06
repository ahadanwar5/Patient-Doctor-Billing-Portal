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
$dname = $_POST ['dname'];
$contact = $_POST ['contact'];
$payment = $_POST ['payment'];
$bill_amount = $_POST ['bill_amount'];
$amount_paid = $_POST ['amount_paid'];
$insurance = $_POST['insurance'];

$querry = "insert into billing (Patient_Name,Doctor_Name,Contact_Number,Payment_Method,Bill_Amount,Amount_Paid,Insurance_Provider) 
            values ('$name','$dname','$contact','$payment','$bill_amount','$amount_paid','$insurance')";

$send_querry = mysqli_query($conn,$querry);

echo "Bill Data for Mr/Mrs ".$name." has been saved against contact number ".$contact.".";



