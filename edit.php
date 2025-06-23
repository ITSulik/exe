<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $image = $_POST['image'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    $sql = "UPDATE products 
            SET image='$image', title='$title', price='$price' 
            WHERE id = $id";

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
    <title>Edit Product</title>
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
    <h1>Edit Product</h1>
    <form method="post">
        <label>Image:</label>
        <input type="text" name="image" value="<?php echo $row['image']; ?>" required><br>
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        <label>Price:</label>
        <input type="text" name="price" value="<?php echo $row['price']; ?>" required><br>
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
