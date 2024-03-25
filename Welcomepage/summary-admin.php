<?php
include ("Auth.php");
require "config (1).php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Events Summary </title>
    <link rel="stylesheet" href="summary-admin.css">
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

</div>
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
      </iframe>
  </div>
  <div class="event-info">
    <h2 class="event-title"> <?php echo $row["name"]; ?></h2>
    <br>
    <br>
    <div class="event-details">
      <div class="event-date"><i class="fa fa-calendar"></i> <?php echo $row["date"]; ?></div>
      <div class="event-time"><i class="fa fa-clock-o"></i> <?php echo $row["time"]; ?></div>
      <div class="event-time"><i class="fa fa-map-marker"></i> <?php echo $row["location"]; ?></div>
    </div>
    <br>
    
    <p class="event-description" maxlength="10000">
    <?php echo $row["description"]; ?>
    </p>
    <div class="buttons">
    <a href="edit.php?myid=<?php echo $row["event_id"]; ?>" class="edit"><i class="fa fa-edit"></i>&nbspEdit </a>
    <a href="deletee.php?eid=<?php echo $row["event_id"]; ?>" class="delete"><i class="fa fa-trash"></i>&nbspDelete </a>
	</div>
</div>
<?php
        }
        ?>

      </div>
<footer> SIST Copyright 2023 

</footer>
</body>
</html>