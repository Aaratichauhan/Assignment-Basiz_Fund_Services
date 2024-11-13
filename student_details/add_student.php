<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$standard = $_POST['standard'];
$date_of_birth = $_POST['date_of_birth'];
$age = $_POST['age'];
$father_name = $_POST['father_name'];
$father_mobile = $_POST['father_mobile'];
$email = $_POST['email'];

// Validate mobile number
if(!is_numeric($father_mobile) || strlen($father_mobile) != 10) {
    echo "Invalid mobile number";
    exit;
}

$sql = "INSERT INTO students (name, gender, standard, date_of_birth, age, father_name, father_mobile, email)
VALUES ('$name', '$gender', '$standard', '$date_of_birth', $age, '$father_name', '$father_mobile', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New student added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
