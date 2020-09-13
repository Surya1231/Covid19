<?php
  include("config.php");
  $db=new Database();
  $conn=$db->db_connect();
  error_reporting(-1);
  ini_set('display_errors', 'On');
  set_error_handler("var_dump");

  if ($_SESSION['user']==null || (!isset($_SESSION['user']))) {
    header("Location:login.php");
    $host=$_SESSION["user"];
    $title=$_POST['title'];
    $discuss=$_POST['cid'];
    $query="Insert into `comments` (`id`, `comment`, `discuss`) values ('$host','$title', '$discuss')";
    $result=$db->insertQuery($query);
    header("Location:issues.php");
  }
  else{
    $host=$_SESSION["user"];
    $title=$_POST['title'];
    $discuss=$_POST['cid'];
    $query="Insert into `comments` (`id`, `comment`, `discuss`) values ('$host','$title', '$discuss')";
    $result=$db->insertQuery($query);
    header("Location:issues.php");
  }
?>
