<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
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
        <a href="product.php">Product</a>
        <a class="act" href="contact.php">Contact</a>
        <a class="login" href="register.php">Log in/Register</a>
      </div>

 </header>

 <section>
<div class="contactus"><h1>Contact Us</h1>
    <p>We usually reply in a few minutes</p>
</div>
<div class="cont-contact" style="width: 1018px;margin-left: 50px;">
    <form action="/action_page.php">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
  
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Kosove</option>
        <option value="canada">Shqiperi</option>
        <option value="usa">Maqedoni e Veriut</option>
      </select>
  
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit">
    </form>
  </div>  
  <br><br>

 </section>

 <?php
  include 'components/footer.php';
 ?>