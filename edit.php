<?php
 
 session_start();
 include_once 'businessLogic/databaseConfig.php'; 
    if(isset($_POST['edit'])){    
    $id=$_SESSION['id'];
    $fname=$_POST['username'];
    $email=$_POST['email'];   
    $select= "select * from users where idUsers='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);  
    $res= $row['id'];
    if($res === $id){
   
       $update = "update users set uidUsers='$fname',emailUsers='$email' where idUsers='$id'";
       $sql2=mysqli_query($conn,$update);
       if($sql2){ 
           
           header('location:dashboard.php');
       }
       else{
           
           header('location:dashboard.php?update=failed');
       }
    }
    else
    {
        
        header('location:dashboard?id=notmatch');
    } 
}
?>
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

<section id="login-register" >
    <form id="login" class="input-group" action="edit.php" method="POST">
    <input type="text" style="display:none;" class="input-field" name="id" placeholder="">
    <input type="text" class="input-field" name="username" placeholder="Edit name">
    <input type="text" class="input-field" name="email" placeholder="Edit email">
    <button type="submit" class="submit-btn" name="edit">Edit</button>
    </form>
</section>

<?php
    include 'components/footer.php';
?>