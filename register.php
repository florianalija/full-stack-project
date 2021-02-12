
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/register.css">
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
        <a href="contact.php">Contact</a>
        <a class="login" href="register.php">Log in/Register</a>
      </div>

 </header>
 
 
    <sectio id="login-register">
        <div class="container">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="login forms form-style">
                    <form id="login" class="input-group" action="businessLogic/login.php" method="POST">
                        <input type="text" class="input-field" name="username" placeholder="Username">
                        <input type="password" class="input-field" name="password" placeholder="Password">
                        <button type="submit" class="submit-btn" name="login-btn" onclick="validate(0)">Login</button>
                    </form>
                </div>
                <div class="register forms hidden">
                    <form id="register" class="input-group" action="businessLogic/signup.php" method="POST">
                        <input type="text" class="input-field" name="register-username" placeholder="Username" >
                        <input type="text" class="input-field" name="register-email" placeholder="Email" >
                        <input type="password" class="input-field" name="register-password" placeholder="Password" >
                        <input type="password" class="input-field" name="register-password-repeat" placeholder="Confirm Password" >
                        <button type="submit" class="submit-btn" name="register-btn" onclick="validate(1)">Register</button>
                    </form>
                </div>
            </div>
            
            <div class="graph-register" style="margin-top: 205px; margin-left: 101px;">
            <h1>Be part of our Team </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias illum ab deserunt dicta expedita, ipsa cumque!</p>

        </div>
        </div>
        <br>
      <div class="semi-container" style="text-align: center;">
        <h1>Our story</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi corporis ex sunt eius. 
            Eligendi optio mollitia cum, debitis,
             aliquam accusantium fuga reprehenderit magni, v
             eritatis quam nisi quae dolorem. Dignissimos, quidem.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae corrupti rerum accusamus culpa dolorum laboriosam necessitatibus, sequi autem aut dolore, cumque expedita nihil accusantium hic vero ea repudiandae amet. Ipsa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quisquam repudiandae voluptas rem eligendi animi at consequatur? Culpa, hic aspernatur cumque optio eos dolore laboriosam deserunt cupiditate! Aperiam, corrupti Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia consectetur error fugiat sunt ad cupiditate quasi ullam adipisci in eaque ipsam consequuntur excepturi cumque, pariatur obcaecati sit vitae culpa? Assumenda!</p>
            </div>
    </section>

<?php
  include 'components/footer.php';
?>