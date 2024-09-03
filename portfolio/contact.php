<?php
session_start();
?>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Nightnurse@vinnie44040";
$dbname = "personal_portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is available
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO vinnie (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "thanks for contact $name";
    } else {
        echo "Error: " . $stmt->error;
    }

    // header("Location: about.php");
    exit();

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

