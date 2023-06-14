<!DOCTYPE HTML>
<html>
<body>
<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['cname']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['cmessage'])) {
        
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $cmessage = $_POST['cmessage'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "userlap";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }

        $stmt = $conn->prepare("INSERT INTO contact(cname, email, phone, cmessage) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $cname, $email, $phone, $cmessage);

        if ($stmt->execute()) {
            echo "Your message has been sent.";
        } else {
            echo "There were errors while saving the data.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required.";
        die();
    }
} else {
    echo "Submit button is not set.";
}
?>
 <p class="website"> <a href="Home.html">  <- Go back to Little Abqari Preschool Page </a></p>
</body>
</html>
