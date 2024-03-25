
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Log In </title>
    <link rel="stylesheet" href="Login.css">
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
    <div class="form-box">
    <?php
	// Calling the Connection file!
	require "config (1).php";
	
	session_start();
	// If form submitted, insert values into the database.
	
	if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn,$username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
		
		//Checking is user existing in the database or not
        $query = "SELECT * FROM registration WHERE username='$username' and password='$password'";
		$result = mysqli_query($conn,$query);
		$rows = mysqli_num_rows($result);
        
		if($rows==1){

            $row=mysqli_fetch_assoc($result);
            $user_id=$row['user_id'];
	        $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
           
		// Redirect user to a welcome page
	    header("Location: events-display-admin.php");
        }
        else {
			echo "<p style='color:red; text-align:center; margin-top: 20px;'> Invalid Credentials </p>" ;
		}
	}
?>

        <div class="button-box">
            <div id="button"></div>
    <button class="toggle-button" onclick="loggedin()">Login</button>
    <a style="text-decoration: none;" href="registration-form.php"> <button class="toggle-button" onclick="registered()">Register</button></a>
        </div>

<form action="" id="login" method="post" name="username" class="input-form">
    <input type="text" class="input-option" name="username" placeholder="Enter Username" required>
    <br>
    <br>
    <input type="password" class="input-option" name="password" placeholder="Enter Password" required>
    <br>
    <br>
    <br>
    <br>
    <br>
 <input type="submit" class="submit" name="submit" value="Log in">
</form>



<script src="Login.js"></script>
</body>
</html>