<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $currenteducation = $_POST['currenteducation'];
    $password = $_POST['password'];

    // Validate data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($age) || empty($gender) || empty($currenteducation) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        // Connect to your database (replace with your database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signin";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO registration (name, email, age, gender, currenteducation, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $name, $email, $age, $gender, $currenteducation, $password);

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
    header("Location: newregisters.php");
    exit();
}
?>
