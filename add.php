<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image = $_POST['image'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    

    $sql = "INSERT INTO products (image, title, price) 
            VALUES ('$image', '$title', '$price')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
            <ul>
            <li><a href="index.php#Home">Home</a></li>
            <li><a href="index.php#NewProd">New Products</a></li>
            <li><a href="index.php#Gallery">Gallery</a></li>
        </ul>
        </div>
    <h1>Add Product</h1>
    <form method="post">
        <label>Image:</label>
        <input type="text" name="image" required><br>
        <label>Title:</label>
        <input type="text" name="title" required><br>
        <label>Price:</label>
        <input type="text" name="price"><br>
        <button type="submit">Submit</button>
    </form>
    <div class='footer'>
<ul>
    <li>Medvețchi Valentin</li>
    <li>valmedved5@gmail.com</li>
</ul>
    </div>
</body>
</html>
