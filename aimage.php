<?php
  $conn = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");
  $type = $_GET['type'];
  $sql = "select image from guidance_types where type='$type'";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
  header("Content-type: image/png");
  echo $rows['image'];
?>