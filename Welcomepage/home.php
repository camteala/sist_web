<?php
require "config (1).php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="website icon" type="png" href="sist.png">
    
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
        <h1> SIST STUDENT PORTAL</h1>
        <h5> To add events, login or register </h5>
    </div>
   </div>
   <br>
   <div>
    <br>

  
<div class="welcome">

  <div class="welcome--section">
    

    <div class="welcome--content">
      <div class="welcome--img">
        <img src="students.jpg" alt="sist photo">
      </div>
      <div class="content--text">
        <div class="welcome--menu">
            <h4> Welcome to SIST's Official Website </h4>
        </div>
        <div class="welcome--text">
        
          <p> For 20 Years, SIST has delivered British Education in Morocco, awarding Bachelor and Masters degrees from Cardiff Metropolitan University.
            <br>
            <br>
 <ul style="padding-left:25px; font-size:20px;">
 <li>Access top-quality higher education in Morocco</li>
 <li>Scholarships for the final year in the UK</li>
 <li>100% of our programmes are taught in English with a Foundation Year for non-English speakers </li>
 <br>
 
 </ul>
          </p>
        </div>
        <div class="button">
          <a href="about.html"> Know more..  </a>
        </div>
      </div>
    </div>
  </div>


<br>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<div class="event-container">
<h3 style="font-family:tahoma;" class="year" > THE LATEST EVENTS </h3>
<section class="template">
  

  <?php 
  $query = "SELECT * FROM `event_details` ORDER BY event_id DESC LIMIT 3";
  $result = mysqli_query($conn,$query);
  while ($row=mysqli_fetch_assoc($result)){

  ?>
  
  <div class="event-template">
      <div class="template-image">
              <img src="<?php echo $row["image_url"]; ?>"> 
      </div>
      
      <div class="event-template-container">
         <div class="event-name">
          <h2> <?php echo $row["name"]; ?></h2>
         </div>
       
         <div class="event-date">
          <h5> <?php echo $row["date"]; ?></h5>
          <h5> <?php echo $row["time"]; ?></h5>
         </div>
         <div class="event-description">
          <p> <?php echo $row["description"]; ?>
          </p>
         </div>
         <div class="Readmore">
           <a href="summary-user.php?myid=<?php echo $row["event_id"]; ?>"> Read more</a>
         </div>
      </div>
  </div>
<?php 
}
?>
</section><br>
<br>
  
        
     
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
</html