<?php
require "config (1).php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Events Summary </title>
    <link rel="stylesheet" href="summary-user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrapper">
    <nav>
        <img src="sist.png" class="sist" alt="logo"> 
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="events-display-users.php">EVENTS</a></li>
            <li><a href="Login.php">LOG IN </a></li>
            <li><a href="registration-form.php">REGISTER</a></li>
           
        
        </ul>
    </nav> 
    <div class="section">
        <h1> EVENTS SUMMARY</h1>
        
    </div>
   </div>
   <br>
   <div>
   
   <div class="event-summary">
   <?php 
        $id=$_GET['myid'];
        $query = "SELECT * FROM `event_details` WHERE event_id=$id";
        $result = mysqli_query($conn,$query);
        while ($row=mysqli_fetch_assoc($result)){

        ?>
  <div class="event-media">
  <img src="<?php echo $row["image_url"]; ?>" alt="event image" class="event-image">
	<iframe class="event-video" src="<?php echo $row["video_url"]; ?>" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="event-info">
    <h2 class="event-title"> <?php echo $row["name"]; ?></h2>
    <div class="event-details">
    <div class="event-date"><i class="fa fa-calendar"></i> <?php echo $row["date"]; ?></div>
      <div class="event-time"><i class="fa fa-clock-o"></i> <?php echo $row["time"]; ?></div>
      <div class="event-time"><i class="fa fa-map-marker"></i> <?php echo $row["location"]; ?></div>

    </div>
    <br>
    <p class="event-description">
    <?php echo $row["description"]; ?>

    <div class="Back">
    <a href="events-display-users.php">Back</a>
</div>
    </p>
    
</div>
<?php
        }
        ?>
        </div>
 <footer>
    <center><img class="sist" src="sist.png">
        <br>
        <br>
        <br>
       <span class="contact1"> Contact us </span> 
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
       <center>SIST © 2023 All Rights Reserved</center>
</footer> 
</body>
</html>