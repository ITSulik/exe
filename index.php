<?php
include 'db.php';
$sql = "SELECT * FROM products";
$res = $conn->query($sql);
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
    <div class="headerindex" id="Home">
        <div><img src="header.jpg" alt="a?" class="img"></div>
        <div class="navbar">
            <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#NewProd">New Products</a></li>
            <li><a href="#Gallery">Gallery</a></li>
        </ul>
        <div class="title">PUT THE WORLD ON MUTE</div>
        </div>
    </div>
   
    <div class="products" id="NewProd">
        <h1>NEW PRODUCTS</h1>
    <div class="list">
    <?php
        while ($row = $res->fetch_assoc()) {
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
        }
        ?>
       </div>
    </div>
    <div class="gallery" id="Gallery">
        
    <h1>GALLERY</h1>
    <div class="slideshow">

  <div class="Sli fade">
    <img src="carousel/slide1.png" style="width:100%">
  </div>
  <div class="Sli fade">
    <img src="carousel/slide2.png" style="width:100%">
  </div>
  <div class="Sli fade">
    <img src="carousel/slide3.png" style="width:100%">
  </div>
  <div class="Sli fade">
    <img src="carousel/slide4.png" style="width:100%">
  </div>
  <div class="Sli fade">
    <img src="carousel/slide5.png" style="width:100%;">
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">

  <span class="dots" onclick="currentSlide(1)"></span>
  <span class="dots" onclick="currentSlide(2)"></span>
  <span class="dots" onclick="currentSlide(3)"></span>
  <span class="dots" onclick="currentSlide(4)"></span>
  <span class="dots" onclick="currentSlide(5)"></span>

</div>
    </div>
    <script src="js.js"></script>
    <div class='footer'>
<ul>
    <li>Medvețchi Valentin</li>
    <li>valmedved5@gmail.com</li>
</ul>
    </div>
</body>
</html>