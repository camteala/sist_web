<?php
	
  require "config (1).php";
	include("Auth.php");


  $user_id = $_SESSION['user_id'];
  $username = $_SESSION['username'];
  $uid = $user_id;
    if (isset($_POST["submit"])) {
        $uid = $_POST["user_id"];
        $name = $_POST["name"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $location = $_POST["location"];
        $description = $_POST["description"];
        $video_url = $_POST["video_url"];
        $image_url = $_POST["image_url"];
       
    // Insert the event data into the database
    $sql_query = "INSERT INTO `event_details` SET name =    '$name', location = '$location', date = '$date', time = '$time', description = 
   '$description', video_url = '$video_url',  image_url = '$image_url', user_id = '$user_id'";
       
    if (mysqli_query($conn,$sql_query)) {
        header("Location: events-display-admin.php");
        
        }
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Create Page </title>
    <link rel="stylesheet" href="event-create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="topbar" id="topbar">
        <div class="wrapper2">
           
            <nav>
                <span style="font-size:40px;cursor:pointer; color: aliceblue; float: left;" onclick="openbar()">&#9776;</span>
                &nbsp <span style="color: aliceblue; font-size: 20px"> Options </span>
             <a href="home.php"><img src="sist.png" height="100px" width="150px" style="float:right;" ></a>
            </nav> 
    
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-button" onclick="closeBar()">&times;</a>
        <br>
        <br>
       <?php 
       $query="SELECT * FROM registration WHERE username='$username'";
       $result=mysqli_query($conn,$query);
       $row=mysqli_fetch_assoc($result);
       ?>

        
        <div class="profile-header" style="background: #111;">
		<img src="<?php echo $row['profile']; ?>" alt="profile image" class="profile-image">
        
		    <i class="fa fa-user-circle" style="font-size: 30px; color: #818181; padding: 15px;"></i><span style="font-size: 25px;color: #818181"> <?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></span>
        <a href="home.php"><i class="fa fa-home"></i>  Home</a>
        <a href="event-create.php"><i class="fa fa-plus-square"></i>  Create an event</a>
        <a href="events-display-admin.php"><i class="fa fa-paper-plane"></i>  Admin's Events</a>
        <a href="Logout.php"><i class="fa fa-sign-out"></i> Log out</a>
        
      </div>
  </div>
</div>
<script>
function openbar() {
  document.getElementById("sidebar").style.width = "250px";
}

function closeBar() {
  document.getElementById("sidebar").style.width = "0";
}
</script>

<div style="background-color:gainsboro;">
<div class="event-container">
    <br>
    <br>
    <center>
<h1>Hi, <b>
  <span style="color: #20BF55;">  <?php echo $_SESSION['username']; ?></span> !</b> Welcome to the Events Page. </h1>
    
</center>

<div class="hero">
    
<form class="event-form" action="" method="post">
   <center> <h2> Events Form </h2> </center>
    <label for="name"> Title:</label><br>
    <input type="text" id="name" name="name" placeholder="enter the title of event" required><br>
    <label for="location"> Location: </label><br>
    <input type="text" id="location" name="location" placeholder="enter the location of event" required><br>
    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required ><br>
    <label for="time">Time:</label><br>
    <input type="time" id="time" name="time" required><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required maxlength="10000"></textarea><br><br>
    <label for="image_url"> Image URL: </label><br>
    <input type="text" id="image_url" name="image_url" placeholder="http://example.com" required><br><br>
    <label for="video_url"> Video URL: </label><br>
    <input type="text" id="video_url" name="video_url" placeholder="http://example.com" required><br><br>
  <center>  <input type="submit" class="submit" value="Submit" name="submit"> </center>
</form>

<footer> SIST Copyright 2023 </footer>
</body>
</html>