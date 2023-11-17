<?php 
require_once ("connection.php");
function display_teams(){
  global $con;
  $query = " select * from teams ";
  $result = mysqli_query($con,$query);

  return $result;
} 
function display_groups(){
  global $con;
  $query = " select * from groups ";
  $result = mysqli_query($con,$query);

  return $result;
} 
?>