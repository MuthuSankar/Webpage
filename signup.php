<?php
  include_once 'header.php';
 ?>

  <section class="main-container">
    <div class="main-wrapper">
      <h2 style="font-weight:normal; color:#fff;">Sign Up</h2>
      <form class="signup-form" action="includes/signup.inc.php" method="post">
        <input type="text" name="first" placeholder="FirstName"> &nbsp;
        <input type="text" name="last" placeholder="LastName"> &nbsp;
        <input type="text" name="email" placeholder="E-Mail"> &nbsp;
        <input type="text" name="uid" placeholder="Username"> &nbsp;
        <input type="password" name="pwd" placeholder="Password"> &nbsp;

        <button type="submit" class="button" name="submit" style="padding-top:10px;">SignUp</button>
      </form>
    </div>
  </section>



  <?php
    include_once 'footer.php';
   ?>
