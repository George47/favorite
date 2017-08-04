<?php
  $itemID = $_GET['id'];
  $userID = 'Your userID';

  $sql = "SELECT * FROM items WHERE itemID = '$itemID' AND userID = '$userID'";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) == 0) {
    $sql2 = "INSERT INTO items (itemID, userID) VALUES ('$itemID', '$userID')";
    $query2 = $db->prepare($sql2);
    $query2->execute();
  } else {
    $sql3 = "DELETE FROM items WHERE itemID = '$itemID' AND user_id = '$userID' ";
    $query3 = $db->prepare($sql3);
    $query3->execute();
  }
  // header
?>
