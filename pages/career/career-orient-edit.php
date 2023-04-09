<?php

$conn = mysqli_connect("localhost", "u476821515_SMS", "Bcpsms12@", "u476821515_SMS");

$post_id = $_GET['edit'];

$rows = mysqli_query($conn, "SELECT * FROM guidance_post WHERE id = $post_id");

$editArray = mysqli_fetch_assoc($rows);

echo json_encode($editArray);