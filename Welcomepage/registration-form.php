<?php
		// Calling the Connecti!
		require "config (1).php";
		
		if(isset($_POST['submit'])) {
            $profile = $_POST['profile'];
			$firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $date = $_POST['date'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $city = $_POST['city'];
            $department = $_POST['department'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $postcode = $_POST['postcode'];
			
			$sql_query="INSERT INTO registration (profile, firstname, lastname, username, password, date, gender, email, mobile, city, department, address1, address2, postcode) values('$profile','$firstname','$lastname', '$username','$password', '$date', '$gender', '$email', '$mobile', '$city', '$department', '$address1', '$address2', '$postcode')";
			
			if(mysqli_query($conn,$sql_query)) {
				header("Location: Login.php");
			}
			
		}	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form </title>
    <link rel="stylesheet" href="registeration-form.css">
    <link rel="website icon" type="png" href="sist.png">
    
</head>
<body>
<style>
 .previous-round{
  text-decoration: none;
  display: inline-block;
  padding: 10px 20px;
  margin-left: 20px;
  border-radius: 30px;
  font-size: 15px;
  width: 55px;
  margin-top: 20px;
 
}

.previous-round a:hover {
  background-color: #ddd;
  color: black;
}

.previous-round {
  background-color: #20BF55;
  color: black;
}
</style>

    <div class="hero">
    <a href="home.php" class="previous-round">&#8249&#8249; Home</a>
    <form class="login_form" method="post" name="form">
        
        <h2> Registration Form</h2>
        <br>
        <div class="register-box">
            <label> Student Profile Picture: </label>
            <input type="text" name="profile" id="profile" placeholder="enter profile url" required/>
    </div>
          <br>

        <div class="register-box">
            <label for="firstname"> First Name: </label>
            <input type="text" name="firstname" id="firstname" placeholder="Enter first name" required/>
            <div id="fname_error"> Please fill up your Name </div>
            
        </div>
        <br>
        <div class="register-box">
            <label for="lastname"> Last Name: </label>
            <input type="text" name="lastname" id="lastname" placeholder="Enter last name"required/>
            <div id="lname_error"> Please fill up your Name </div>
            
        </div>
        <br>
        <div class="register-box">
            <label for="username"> Username: </label>
            <input type="text" name="username" id="username" placeholder="Enter username" required/>
            <div id="uname_error"> Please fill up your Username </div>
           
        </div>
        <br>
        <div class="register-box">
            <label for="password"> Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter password" required/>
            <div id="pass_error"> Please fill up your password </div>
            
        </div>
        
        <br>
        <div class="register-box">
            <label for="date"> Date of Birth: </label>
            <input type="text" name="date" id="date" placeholder="dd/mm/yyyy"required/>
            
        </div>
        <br>
        <div class="register-box">
            <label > Gender: </label>
            <div class="form-inline" name="gender" id="gender">
                <label for="gender"> <input type="radio" name="gender" value="Male" required> Male </label>
                <label> <input type="radio" name="gender" value="Female" required> Female </label>
            </div>
        </div>
        
        <br>
        <div class="register-box">
            <label for="email"> E-mail Address: </label>
            <input type="email" name="email" id="email" placeholder="Enter email" required/>
            <div id="email_error"> Please fill up your Email </div>
          
        </div>
        <br>
        <div class="register-box">
            <label for="mobile"> Mobile Number: </label>
            <input type="tel" name="mobile" id="mobile" maxlength="10" placeholder="XX XXX XX XXX" required/>
            <div id="mobile_error"> Please fill up your number</div>
        </div>
        <br>
        <div class="register-box">
            <label for="city"> Campus City: </label>
            <select name="city" id="city" required>
                <option value="Select"> Select City </option>
                <option value="Casablanca"> Casablanca </option>
                <option value="Tangier"> Tangier </option>
                <option value="Rabat"> Rabat </option>
                <option value="Marrakech"> Marrakech </option>
                <option value="Bouzkoura"> Bouzkoura </option>
            </select>
        </div>
        <br>
        <div class="register-box">
            <label for="department"> Department: </label>
            <select name="department" id="department" required>
                <option value="Select"> Select department </option>
                <option value="Foundation year"> Foundation year </option>
                <option value="Software engineering"> BSc. Software Engineering </option>
                <option value="Bachelor of business"> Bachelor of Business Adminstration  </option>
                <option value="Master of business"> Master of Business Adminstration </option>
            </select>
        <br>
        <div class="register-box">
            <label for="address1"> Street Address 1: </label>
            <input type="text" name="address1" id="address1" placeholder="Enter address" required/>
            <div id="address_error"> Please fill up your address </div>
        </div>
        <br>
        <div class="register-box">
            <label for="address2"> Street Address 2:</span> </label>
            <input type="text" name="address2" id="address2" placeholder= "Enter Address" required/>
            
        </div>
        <br>
        <div class="register-box">

            <label for="postcode"> Postcode: </label>
            <input type="text" name="postcode" id="postcode" placeholder="Enter postcode" required/>
            <div id="post_error"> Please fill up this box </div>

        </div>
        <br>
        <br>
        
         <button type="submit" class="submit" name="submit" onclick="validateForm();"> Sign in</button>
        
         

        <button onclick= "reset" type="reset" class="reset"> Reset </button>
        <br>
        <br>
        <br>
        <p> Already have an account? <a href="Login.php">Log in!</a></p>
    
    </form>
    </div>
   
    <br>
    <br>

    <footer>
    <center><img class="sist" src="sist.png">
        <br>
        <br>
        <br>
       <span class="contact"> Contact us </span> 
    </center>   
    <br>
    <br>
      <center>
        <a style="text-decoration: none;" href="https://web.facebook.com/SISTBritishEducation/?_rdc=1&_rdr"><img src="facebook.png" class="container" alt="facebook"> </a> 
        <a style="text-decoration: none;" href="https://www.instagram.com/sist.education/"><img src="instagram.png" class="container" alt="instagram"> </a>
        <a style="text-decoration: none;" href="https://twitter.com/SISTBritishEdu"> <img src="twitter.png" class="container" alt="twitter"> </a>
        <a style="text-decoration: none;" href="https://ma.linkedin.com/school/sist-british-higher-education/"><img src="linkedin (1).png" class="container" alt="linkedin"></a>
        
    </center>
        <br>
        <br>
       <center>SIST © 2022 All Rights Reserved</center>
</footer> 
<script src="valid.js" type="text/javascript"></script>

</body>
</html>