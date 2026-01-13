<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, phone, email, age, password)
        VALUES ('$name','$phone','$email','$age','$password')";

if ($conn->query($sql)) {
    echo "<script>alert('Registration successful'); window.location='login.html';</script>";
} else {
    echo "Error";
}
?>