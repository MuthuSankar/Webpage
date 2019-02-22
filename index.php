<?php
  include_once 'header.php';
 ?>

  <section class="main-container">
    <div class="main-wrapper">
        <br>
        <img id="logo1" src="images/logo.png" alt="logo" width="186" height="250">
        <p id="text">I N F I N I T Y</p>
        <p id="text2">BY BITE</p>
        <br>

        <img id="largeimage" src="images/NCenterimage.jpeg" width="800" height="500">

            <p id="text3"> "Life Beyond Limits" </p>
            <p id="text4"> Infinity tariff plan for your mobile.
              It's a perfect service created researching today's millennial generation needs.
              Discover the infinity and open the whole new world of experience with no limits.</p>
              <div style="width:400px;padding-left:290px;">
                <button style="float: left;" class="button" name="Signup">
                  <a style="font-weight:normal; color:#fff;" href="signup.php">Sign Up</a></button>
                <button style="float: right;" class="button"
                  onclick="topFunction()" id="logbtn" name="LogIn">Log In</button>
              </div>
      </div>
      <?php
      if(isset($_SESSION['u_id'])){
        header("Location: ../useraccount.php");
        exit();
      }
       ?>

    </div>
  </section>

  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("logbtn").style.display = "block";
    } else {
      document.getElementById("logbtn").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>

  <?php
    include_once 'footer.php';
   ?>
