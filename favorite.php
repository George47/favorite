<?php

  $houseID = $_GET['id'];
  $currentUser = $_SESSION['login_user'];
  $currentID = $_SESSION['login_id'];

  $sql = "SELECT * FROM usr_likes WHERE user_id = '".$currentID."' AND house_ID = '".$houseID."'" ;
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) == 0) {
    $sql2 = "INSERT INTO usr_likes (user_id, house_ID) VALUES ('".$currentID."', '".$houseID."')";
    $query2 = $db->prepare($sql2);
    $query2->execute();
  } else {
    $sql3 = "DELETE FROM usr_likes WHERE user_id = '$currentID' AND house_ID = '$houseID'";
    $query3 = $db->prepare($sql3);
    $query3->execute();
  }
  // header('location'.'../index.php');
  echo '{"status":"success"}';

?>
