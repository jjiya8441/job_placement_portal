<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    $lastcompany = $_POST['lastcompany'];
    $start= $_POST['start'];
    $number=$_POST['number'];
    $branch=$_POST['branch'];
    // Validate data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($password) || empty($position) || empty($lastcompany) || empty($start) || empty($number)|| empty($branch)) {
        echo "Please fill in all fields";
    } else {
        // Connect to your database (replace with your database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signin";

        // Create connection
        $conn = new mysqli ( $servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO registrationemp (name, email, password, position,lastcompany,start,number,branch) VALUES (?, ?, ?, ?, ?, ?,?,?)");
        $stmt->bind_param("ssssssis", $name, $email, $password, $position, $lastcompany, $start,$number,$branch);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location:registrationemp.php");
    exit();
}
?>
