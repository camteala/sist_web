<?php
require "config (1).php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admins Events </title>
    <link rel="stylesheet" href="events-display-admins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="website icon" type="png" href="sist.png">
    
<body>

   <div class="wrapper">
    <nav>
        <img src="sist.png" class="sist" alt="logo"> 
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="events-display-users.php">EVENTS</a></li>
            <li><a href="event-create.php">CREATE</a></li>
            <li><a href="Logout.php">LOG OUT </a></li>
           
        
        </ul>
    </nav> 
    <div class="section">
        <h1> ADMIN'S EVENTS </h1>
    </div>
   </div>

   <div class='speech-bubble'> In this page, you can edit any event you like and delete your own events!
   <br> 
 <span style="color:red;">  NOTE: </span> You won't be able to delete others' events 
   </div>
   <div class="event-container">
      <section class="template">
      

        <?php 
        $query = "SELECT * FROM `event_details`";
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
               <div class="event-description" maxlength="10000">
                <p> <?php echo $row["description"]; ?>
                </p>
               </div>
            
               <div class="buttons">
               <a href="summary-admin.php?myid=<?php echo $row["event_id"]; ?>" class="edit"><i class="fa fa-edit"></i>&nbspEdit </a>
               <a href="deletee.php?eid=<?php echo $row["event_id"]; ?>" class="delete"><i class="fa fa-trash"></i>&nbspDelete </a>
	           </div>
               <br>
            </div>
        </div>
       
   <?php 
   }
   ?>
    </section>
</div>
<style>
    footer{
    background-color: rgb(134, 208, 85);
    text-align: center;
  padding: 1.2rem;
  margin-top: 30%;
  width: relative;
}
</style>
    <footer> SIST Copyright 2023 

</footer>

</body>
</html>