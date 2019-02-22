<?php
  include_once 'header.php';
 ?>

  <section class="main-container">
    <div class="main-wrapper">
      <h2 style="font-weight:normal; color:#fff;">Sign Up</h2>
      <form class="signup-form" action="includes/signup.inc.php" method="post">
        <input type="text" name="first" placeholder="FirstName">
        <input type="text" name="last" placeholder="LastName">
        <input type="text" name="email" placeholder="E-Mail">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">

        <button type="submit" class="button" name="submit">SignUp</button>
      </form>
    </div>
  </section>



  <?php
    include_once 'footer.php';
   ?>
