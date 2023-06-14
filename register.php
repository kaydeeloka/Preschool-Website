<!-- register php to connect registration data with mysql -->
<!DOCTYPE HTML>
<html>
<body>
<?php

//call the register id
//when register id is set process the data
if (isset($_POST['register'])) {
    //set name, email, phone, childname, gender and age data
    if (isset($_POST['pname']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['chname']) &&
        isset($_POST['chgender']) && isset($_POST['childage'])) {
        
    //retrieve value
        $pname = $_POST['pname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $chname = $_POST['chname'];
        $chgender = $_POST['chgender'];
        $childage = $_POST['childage'];
    
    //database details
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "userlap";
    
    //connect with mysql
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
    
    //prepare statement to insert the data in registration db table
        $stmt = $conn->prepare("INSERT INTO registration (pname, email, phone, chname, chgender, childage) VALUES (?, ?, ?, ?, ?, ?)");
    //bind form values to the prepared statement
        $stmt->bind_param("ssissi", $pname, $email, $phone, $chname, $chgender, $childage);
    
    //execute when prepared statement is inserted
        if ($stmt->execute()) {
            //print this message if successful
            echo "You've registered successfully.";
        } else {
            //print this error message if not
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
<!-- create hyperlink to go back to the mainpage -->
 <p class="website"> <a href="Home.html">  <- Go back to Little Abqari Preschool Page </a></p>
</body> 
</html>
