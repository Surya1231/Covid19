<?php
  include("config.php");
  $db=new Database();
  $conn=$db->db_connect();
  error_reporting(-1);
  ini_set('display_errors', 'On');
  set_error_handler("var_dump");

  $user = $_SESSION['user'];
  $cid = $_POST['cid'];
  $sql = "SELECT * from profile_challenges where cid = '$cid' AND user_id = '$user'";
  $sql = mysqli_query($conn, $sql);

  if(mysqli_num_rows($sql) > 0){
    echo "<script> window.alert('Challenge Already Completed');
    window.close();</script>";
  }
  else {
    $query = "INSERT INTO `profile_challenges` (`user_id`, `cid`) VALUES ('$user', '$cid')";
    mysqli_query($conn, $query);
    $query = "UPDATE `user` SET `points` = `points`+200 WHERE `uid` = '$user'";
    mysqli_query($conn, $query);
    echo "<script> window.alert('Challenge Successfully Completed');
    window.close();</script>";
  }
?>
