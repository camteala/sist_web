<?php
require_once "config (1).php";
    include_once("Auth.php");

    if (isset($_GET['hid']) && isset($_POST['edit'])) {
        $id = $_GET['hid'];
        $name=$_POST["name"];
        $date=$_POST["date"];
        $time=$_POST["time"];
        $location=$_POST["location"];
        $description=$_POST["description"];
        $video_url=$_POST["video_url"];
        $image_url=$_POST["image_url"];
       

        
        $sql = "UPDATE `event_details` SET 
        `name`='$name',
        `location`='$location',
        `description`='$description',
        `video_url`='$video_url',
        `image_url`='$image_url',
        `date`='$date',
        `time`='$time'
       
         WHERE event_id = $id";

        if(mysqli_query($conn,$sql)) {
        
            header("Location: events-display-admin.php");
        }

    }













?>