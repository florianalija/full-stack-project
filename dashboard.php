<?php
    include_once 'businessLogic/databaseConfig.php';
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
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="product.php">Product</a>
        <a href="contact.php">Contact</a>
        <?php
          if (isset($_SESSION["userId"])){
            #if($_SESSION['role'] == '1'){
            if($_SESSION['userUid'] == 'Admin'){
                echo '<a class="act" href="dashboard.php">Dashboard</a>';
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
<div>
    <h1 style="text-align: center; font-family: 'Montserrat', sans-serif;">Dashboard page</h1>
    <div class="admin" style="text-align: center;">
        <h2 style="text-align: center; font-family: 'Montserrat', sans-serif;">Admin Options:</h2>
        <table style="margin-left: auto; margin-right: auto; width: 100%; margin-bottom: 15.5%; margin-top: 10%;">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    #$sql="SELECT * FROM data";
                    #$result = mysqli_query($conn, $sql);
                    #$datas = array();
                    #if(mysqli_num_rows($result) > 0){
                     #   while($row = mysqli_fetch_assoc($result)){
                      #      $datas[] = $row;
                       # }
                    #}
                    #foreach ($datas as $data) {
                ?>
                    <tr>
                        <td><?php echo $_SESSION['userUid']; ?></td>
                        <td><a href=<?php echo "edit.php?id=" . $_SESSION['userId'];
                                    ?>><button class="bttn">Edit</button></td>
                        <td><a href=<?php echo "businessLogic/deleteUser.php?id=" . $_SESSION['userId'];
                                    ?>><button class="bttn">Delete</button></td>
                    </tr>
                <?php
                #}
                ?>
            </tbody>
        </table>
    </div>
</div>
</content>

 <?php
    include 'components/footer.php';
 ?>