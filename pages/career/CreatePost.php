<?php
$conn = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $description = $_POST["description"];
  $category = $_POST["category"];
  $preference = $_POST["preference"];

  
  if($_FILES["image"]["error"] == 4){
    $_SESSION['stats'] = "Image Does Not Exist.";
    $_SESSION['stats_code'] = "error";
    header("Location: career_orientation.php");
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      $_SESSION['stats'] = "Invalid Image Extension..";
      $_SESSION['stats_code'] = "error";
      header("Location: career_orientation.php");
    }
    else if($fileSize > 1000000){
      $_SESSION['stats'] = "Image Size Is Too Large.";
      $_SESSION['stats_code'] = "error";
      header("Location: career_orientation.php");
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO guidance_post VALUES('', '$name', '$description', '$category' , '$preference' , Now() , '$newImageName')";
      mysqli_query($conn, $query);
      $_SESSION['stats'] = "Successfully Added.";
      $_SESSION['stats_code'] = "success";
      header("Location: career_orientation.php");
    }
  }
}
?>