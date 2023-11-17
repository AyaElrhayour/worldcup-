<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("connection.php");
function display_teams()
{
  $result = null;
  global $con;

  if (isset($_POST["group_id"])) {
    $key = $_POST["group_id"];
    $query = "SELECT * FROM teams t JOIN staduim s ON t.group_id = s.group_id WHERE t.group_id = $key";
    $result = $con->query($query);   
    if (!$result) {
      echo "Error: " . $con->error;
    }
  } else {
    $query = "SELECT * FROM teams t JOIN groups g ON t.group_id = g.group_id LEFT JOIN staduim s ON t.group_id = s.group_id;";
    $result = mysqli_query($con, $query);
  }

  return $result;
}

function display_groups()
{
  global $con;
  $query = " select * from groups ";
  $result = mysqli_query($con, $query);

  return $result;
}

// function getTeamInfo()
// {
//   global $con;
//   $key = $_POST["teams_id"];
//   if(isset($key)) {
//     echo "HERE";
//     $query = " select * from teams WHERE teams_id = $key ";
//     $result = mysqli_query($con, $query);
//     return $result;
//   }else {
//     return null;
//   }
// }


