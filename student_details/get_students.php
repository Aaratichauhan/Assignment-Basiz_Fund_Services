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

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['standard']}</td>
            <td>{$row['date_of_birth']}</td>
            <td>{$row['age']}</td>
            <td>{$row['father_name']}</td>
            <td>{$row['father_mobile']}</td>
            <td>{$row['email']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No students found</td></tr>";
}

$conn->close();
?>
