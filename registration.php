<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <!-- Style CSS for registration page-->
  <link rel="stylesheet" href="./css/register.css">
</head>

<body>
  <!-- registration form -->
 <form action="register.php" method="POST">
 <div class="container">
 <h1>Registration Form</h1>
 <p>Please fill up the form with correct values.</p>
 
 <!-- Form input fields -->     
 <!-- Section 1 -->
 <fieldset>
   <legend><span class="section">1</span>Your Basic Info</legend>
    <!-- Name -->
   <label for="pname"><b>Name:</b></label>
   <input type="text" name="pname" required><br>

   <!-- Email -->
   <label for="email"><b>Email :</b></label>
   <input type="email" name="email" required><br>
   
    <!-- Phone Number -->
   <label for="phone"><b>Phone no :</b></label>
   <input type="phone" name="phone" required><br>
 </fieldset>  <!-- section 1 end -->
 
 <!-- Section 2 -->
 <fieldset>
 <legend><span class="section">2</span>Your Child Info</legend>
 <!-- Name -->
   <label for="chname"><b>Child Name :</b></label>
   <input type="text" name="chname" required><br>
  
   <!-- Using Radio box for gender -->
   <label for="chgender"><b>Gender :</b></label>
   <input type="radio" name="chgender" value="m" required>Male
   <input type="radio" name="chgender" value="f" required>Female<br>
   
   <!-- Use option value for age -->
   <label for="childage"><b>Age :</b></label>
   <select name="childage" required>
     <option selected hidden value="">Select Age</option>
     <option value="4">4 years old</option>
     <option value="5">5 years old</option>
     <option value="6">6 years old</option>
   </select><br>
 </fieldset> <!-- section 2 end -->
 
 <!-- Register button -->
 <button class="register-button" type="register" name="register"> Register </button>
 </div> <!-- registration container end -->
 </form>

  <!-- back button that link back to mainpage -->
 <p class="website"> <a href="Home.html">  <- Go back to Little Abqari Preschool Page </a></p>
</body>
</html>
