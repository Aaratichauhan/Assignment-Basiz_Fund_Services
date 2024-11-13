<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="date"], input[type="number"], input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

<body>
    <h2>Add Student</h2>
    <form id="studentForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br><br>

        <label for="standard">Standard:</label>
        <input type="text" id="standard" name="standard" required><br><br>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" readonly><br><br>

        <label for="father_name">Father's Name:</label>
        <input type="text" id="father_name" name="father_name"><br><br>

        <label for="father_mobile">Father's Mobile Number:</label>
        <input type="text" id="father_mobile" name="father_mobile" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="button" onclick="submitForm()">Add Student</button>
    </form>
    
    <h2>Students List</h2>
    <table id="studentsTable" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Standard</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Father's Name</th>
                <th>Father's Mobile Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Students will be loaded here -->
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('date_of_birth').addEventListener('change', function() {
            let dob = new Date(this.value);
            let age = new Date().getFullYear() - dob.getFullYear();
            document.getElementById('age').value = age;
        });

        function submitForm() {
            $.ajax({
                url: 'add_student.php',
                method: 'POST',
                data: $('#studentForm').serialize(),
                success: function(response) {
                    alert(response);
                    loadStudents();
                }
            });
        }

        function loadStudents() {
            $.ajax({
                url: 'get_students.php',
                method: 'GET',
                success: function(response) {
                    $('#studentsTable tbody').html(response);
                }
            });
        }

        // Load students when the page loads
        $(document).ready(function() {
            loadStudents();
        });
    </script>
</body>
</html>
