<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/product.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tange lamp</title>
</head>
<body>

 <header>
    <a href="index.php"><img class="llogo" src="lampbrand-llogo2.png" alt=""></a>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a class="act" href="product.php">Product</a>
        <a href="contact.php">Contact</a>
        <a class="login" href="register.php">Log in/Register</a>
      </div>

 </header>

 <section>
    <h2 style="text-align:center">Our Top Products</h2>

    <div class="card">
      <img src="css/lamp1.jpg" alt="Denim Jeans" style="width:100%">
      <h1>Lorem ipsum</h1>
      <p class="price">$112.99</p>
      <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
      <p><button>Add to Cart</button></p>
    </div>
    <div class="card">
        <img src="css/lamp2.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Lorem ipsum</h1>
        <p class="price">$39.99</p>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
      </div>
      <div class="card">
        <img src="css/lamp3.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Lorem ipsum</h1>
        <p class="price">$2.99</p>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
      </div> 
      <hr style="width: 61%;margin-top: 32px;">

      <div class="card">
        <img src="css/lamp4.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Lorem ipsum</h1>
        <p class="price">$64.99</p>
        <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
        <p><button>Add to Cart</button></p>
      </div>
      <div class="card">
          <img src="css/lamp5.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Lorem ipsum</h1>
          <p class="price">$25.00</p>
          <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
          <p><button>Add to Cart</button></p>
        </div>
        <div class="card">
          <img src="css/lamp6.jpg" alt="Denim Jeans" style="width:100%">
          <h1>Lorem ipsum</h1>
          <p class="price">$18.99</p>
          <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
          <p><button>Add to Cart</button></p>
        </div> <br><br><br><br>

 </section>

 <?php
  include 'components/footer.php';
 ?>