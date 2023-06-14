<!DOCTYPE HTML>
<html>
<body>
<?php
if (isset($_POST['register'])) {
    if (isset($_POST['pname']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['chname']) &&
        isset($_POST['chgender']) && isset($_POST['childage'])) {
        
        $pname = $_POST['pname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $chname = $_POST['chname'];
        $chgender = $_POST['chgender'];
        $childage = $_POST['childage'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "userlap";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }

        $stmt = $conn->prepare("INSERT INTO registration (pname, email, phone, chname, chgender, childage) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssissi", $pname, $email, $phone, $chname, $chgender, $childage);

        if ($stmt->execute()) {
            echo "You've registered successfully.";
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
