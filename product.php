<?php
  #$_SESSION['userUid']="Admin"
  session_start();
?>
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

 <section id="login-register">
    <h2 style="text-align:center">Our Top Products</h2>
    <div class="card">
          <?php
          
            include_once 'businessLogic/databaseConfig.php';
            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              echo "SQL statement failed";
            } else {
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);

              while($row = mysqli_fetch_assoc($result)){
                echo '<br>
                  <a href="#" style="text-decoration: none; color:black; margin: auto; padding: inherit;">
                  <div style="background-image: url(images/'.$row["imgFullNameGallery"].'); margin-right: 200px; margin-top: 100px; margin-bottom: 0px;"></div>
                  <h1>'.$row["titleGallery"].'</h1>
                  <p>'.$row["descGallery"].'</p>
                  <p>Lorem jeamsun denim lorem jeansum.</p>
                  <p><button>Add to Cart</button></p>
                </a>';
              }
            }

            
          ?>
        </div>


        <!--<div class="card">
        <a href="#" style="text-decoration: none; color: black;">
            <div></div>
            <h1>Lorem ipsum</h1>
            <p></p>
            <p>$112.99</p>
            <p><button>Add to Cart</button></p>
          </a>
        </div>
        <div class="card">
        <a href="#" style="text-decoration: none; color: black;">
            <div></div>
            <h1>Lorem ipsum</h1>
            <p></p>
            <p>$112.99</p>
            <p><button>Add to Cart</button></p>
          </a>
        </div>
        <div class="card">
        <a href="#" style="text-decoration: none; color: black;">
            <div></div>
            <h1>Lorem ipsum</h1>
            <p></p>
            <p>$112.99</p>
            <p><button>Add to Cart</button></p>
          </a>
        </div>
        <div class="card">
        <a href="#" style="text-decoration: none; color: black;">
            <div></div>
            <h1>Lorem ipsum</h1>
            <p></p>
            <p>$112.99</p>
            <p><button>Add to Cart</button></p>
          </a>
        </div>
        <div class="card">
          <a href="#" style="text-decoration: none; color: black;">
            <div></div>
            <h1>Lorem ipsum</h1>
            <p></p>
            <p>$112.99</p>
            <p><button>Add to Cart</button></p>
          </a>
        </div>
        -->


      <?php
      if(isset($_SESSION['userId'])){
        if($_SESSION['userUid'] == 'Admin'){
          echo  '
          <div class="form-box">
            <form id="register" class="input-group" action="businessLogic/gallery-upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" class="input-field" name="filename" placeholder="File name.." >
            <input type="text" class="input-field" name="filetitle" placeholder="Image title.." >
            <input type="text" class="input-field" name="filedesc" placeholder="Image description..." >
            <input type="file" class="input-field" name="file">
            <button type="submit" class="submit-btn" name="submit">Upload</button>
            </form>
          </div>
        ';
        }
      }
     
      ?>
    <!--
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
        -->
        </div>
 </section>

 <?php
  include 'components/footer.php';
 ?>