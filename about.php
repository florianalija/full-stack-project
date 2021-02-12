<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tange lamp</title>
</head>
<body>

 <header>
    <a href="index.php"><img class="llogo" src="lampbrand-llogo2.png" alt=""></a>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a class="act" href="about.php">About</a>
        <a href="product.php">Product</a>
        <a href="contact.php">Contact</a>
        <a class="login" href="register.php">Log in/Register</a>
      </div>

 </header>

 <section>
    
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="css/pexelspic1.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <h2>Jane Doe</h2>
              <p class="title">CEO & Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>jane@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="css/balo.jpg" alt="Mike" style="width:100%; height:70%">
            <div class="container" style="margin-top: 29px;">
              <h2>Mike Ross</h2>
              <p class="title">Art Director</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>mike@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <img src="css/balo2.jpg" alt="John" style="width:100%">
            <div class="container" style="margin-top: 29px;">
              <h2>John Doe</h2>
              <p class="title">Designer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>john@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
      <br>

      <div class="cont-grap">
          <h1>Our Story</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, cumque? 
              Iste neque adipisci ad totam, 
              explicabo alias dicta aperiam molestiae 
              tenetur aut eum sit ipsum consequatur sapiente laudantium ipsa voluptatem.
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates possimus dolorum voluptatem eum tempore iure impedit, ullam quidem ex architecto nisi maxime pariatur magnam laborum cumque, officia saepe? Consequuntur, dolorum?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde optio quibusdam tenetur provident sunt iste ut accusamus ipsa fugiat possimus, blanditiis a? Consequatur vitae dolores veritatis adipisci voluptatibus. Sed, earum!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos beatae commodi sint laborum molestias nulla atque a eaque quas. Excepturi architecto dolores, odio deleniti rerum impedit ipsa? Quaerat, incidunt! Rerum! </p>
      </div> <br><br>
 </section>

 <?php
  include 'components/footer.php';
 ?>