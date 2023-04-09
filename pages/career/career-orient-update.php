<?php

$conn = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");


$post_id = intval($_POST['id']);
$name = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$preference = $_POST['preference'];
$image = $_POST['image'];

if($rows = mysqli_query($conn, "UPDATE guidance_post SET name = '$name', description = '$description', category = '$category', preference = '$preference', date = '2023-01-26'  WHERE id = $post_id")){
    header("Location: ../../career_orientation.php?edited='Your post has been edited.'");
}
else{
    header("Location: ../../career_orientation.php?failed='We couldn’t save your changes.'");
}
exit();