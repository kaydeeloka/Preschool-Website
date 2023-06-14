<!-- contact php connect contact data details with mysql-->
<!DOCTYPE HTML>
<html>
<body>
<?php

//call the submit id
//when submit button is pressed set the data to process
if (isset($_POST['submit'])) {
    //set name, email, phone and messages
    if (isset($_POST['cname']) && isset($_POST['email']) &&
        isset($_POST['phone']) && isset($_POST['cmessage'])) {
    
       //retrieves value
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $cmessage = $_POST['cmessage'];
    
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
    
    //prepare statement to insert the data in contact db table
        $stmt = $conn->prepare("INSERT INTO contact(cname, email, phone, cmessage) VALUES (?, ?, ?, ?)");
    //bind form values to the prepared statement
        $stmt->bind_param("ssis", $cname, $email, $phone, $cmessage);

    //execute when prepared statement is inserted
        if ($stmt->execute()) {
            //print this message if successful
            echo "Your message has been sent.";
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
