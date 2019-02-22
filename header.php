<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Infinity</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" sizes="320x200" href="images/whitelogo.png">
</head>
<body>
  <header>
    <nav>
      <div class="main-wrapper">
        <ul>
          <li><img src="images/logo.png" width="48px" height="62px"></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="partner.php">Partners</a></li>
        </ul>
        <div class="nav-login">
          <?php
          if(isset($_SESSION['u_id'])){
              echo '<form action= "includes/logout.inc.php" method="post">
                          <button type="submit" name="submit">Logout</button>
                        </form>';
          }else{
            echo '<form action= "includes/login.inc.php" method="post">
                      <input type="text" name="uid" placeholder="Username/E-mail">
                      <input type="password" name="pwd" placeholder="Password">
                      <button type="submit" name="submit">Login</button>
                      </form><a href="signup.php">Signup</a>';
          }
          ?>
        </div>
      </div>
    </nav>
  </header>
