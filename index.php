<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tange lamp</title>
</head>
<body>

 <header>
    <a href="index.php"><img class="llogo" src="lampbrand-llogo2.png" alt=""></a>
    <div class="topnav">
        <a class="act" href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="product.php">Product</a>
        <a href="contact.php">Contact</a>
        <?php
          if (isset($_SESSION["userId"])){
            #if($_SESSION['role'] == '1'){
            if($_SESSION['userUid'] == 'Admin'){
                echo '<a href="dashboard.php">Dashboard</a>';
            }
          } 
        
        ?>
        <?php
          if (isset($_SESSION["userId"])) {
              echo '<a href="businessLogic/logout.php">Logout</a>';
          }
          else{
            echo '<a class="login" href="register.php">Log in/Register</a>';
          }
          ?>
      </div>

 </header>

<content>
   
       <div class="content-container">
        
           <div class="con-right">
                <h1>Browse out unique Lamp</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing el </p>
                <button class="bttn"><a href="product.php" style="text-decoration: none; color: white;">View More</a></button>

            </div>
            
            <!--  <img class="homep-lamp" src="home-lamp.jpg" alt="lampa ne sallon " style="width:470px;height:510px;"><br> <br>  -->

            <div class="slider">
              <div class="slider-content active">
                <img class="homep-lamp" src="home-lamp.jpg" alt="lampa ne sallon " style="width:470px;height:510px;"><br> <br>
              </div>
              <div class="slider-content not-active">
                <img class="homep-lamp" src="peximg.jpg" alt="lampa ne sallon " style="width:470px;height:510px;"><br> <br>
              </div>
              <div class="slider-content not-active">
                <img class="homep-lamp" src="unsplashimg.jpg" alt="lampa ne sallon " style="width:470px;height:510px;"><br> <br>
              </div>
            </div>

        </div>
    

        <hr style="width: 61%;margin-top: 32px;">
    <div class="content-fxd">
      <!-- <div class="cont-int"> -->
        <h2 class="cont-h2"> Great Lamps  </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dolorem accusamus temporibus, minima consequatur facilis? Nisi dicta animi ut eos, ab beatae saepe, nostrum mollitia laborum deserunt, ratione dolorum doloribus?</p>
        <button class="bttn"><a href="about.php" style="text-decoration: none; color: white;">Learn More</a></button>
      </div>
    </div>
    <br>
        <h2 style="margin-left:49px;">Contact Form</h2>

    <div class="cont-contact" style="width: 1018px;margin-left: 50px;">
    <form method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Your email..">
    
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="kosove">Kosove</option>
          <option value="shqiperi">Shqiperi</option>
          <option value="maqedoni">Maqedoni e Veriut</option>
        </select>
    
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
        if(isset($_POST['submit'])){
          include_once 'businessLogic/function.php';
          $obj = new Contact();
          $res=$obj->contact($_POST);
          if($res==true){
            echo "<script>alert('Query successfuly submitted. Thank you')</script>";
          }else{
            echo "<script>alert('Something went wrong!')</script>";
          }
        }
      ?>
    </div>  
    <br>
   
   
</content>


 <?php
  include 'components/footer.php';
 ?>