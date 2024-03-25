<?php

    include_once("Auth.php");
    require_once "config (1).php";

$id = $_GET['eid']; 
$user_id = $_SESSION['user_id'];
$query = mysqli_query($conn,"SELECT * FROM event_details WHERE event_id = '$id'"); 
$row=mysqli_fetch_assoc($query);
$uid = $row['user_id'];
if ( $row['user_id'] == $_SESSION['user_id']) {
    $del = mysqli_query($conn,"DELETE FROM event_details WHERE event_id = '$id'"); 

    if($del){
        mysqli_close($conn); 
        header("location:events-display-admin.php"); 
        exit;   
    }
    else{
        echo "Error deleting record"; 
    }
}
else{
    header("location:summary-admin.php?myid=$id");
}
?>
