<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audioshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
    <div class="navbar">
            <ul>
            <li><a href="index.php#Home">Home</a></li>
            <li><a href="index.php#NewProd">New Products</a></li>
            <li><a href="index.php#Gallery">Gallery</a></li>
        </ul>
        </div>
    </div>
    <div class="products">
    <table border="1">
    <?php
            $img=$row['image'];
            
            echo "<div class='listing'>
                 <img src='$img'><br>
                 <div class='titlu'>
                {$row['title']}
                <div>
                    <a href='show.php?id={$row['id']}'><span class='dot green'></span></a>
                    <a href='edit.php?id={$row['id']}'><span class='dot yellow'></span></a>
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'><span class='dot red'></span></a>
                <br>
</div></div>
                {$row['price']}
               
                    
                </div>
            ";
        ?>
        </table>
    </div>
    <div class='footer'>
<ul>
    <li>Medvețchi Valentin</li>
    <li>valmedved5@gmail.com</li>
</ul>
    </div>
</body>
</html>
