<?php

require './partials/header.php';

?>
<body class="cont cont--index">
    <?php
        require './partials/nav-notconnected.php';
    ?>
    <main class="container-fluid">
        <h1>Welcome on board</h1>

        <div class="newsletter margin-bottom-xl text-center">
          <div class="container max-width-xs">
            <div class="text-component margin-bottom-sm">
              <h3>I want to be notified</h3>
            </div>

            <form class="newsletter__form">
              <input aria-label="Email" class="form-control" type="email" placeholder="Enter your mail address">
              <button class="btn btn--primary btn--border">SEND</button>
            </form>
          </div>
        </div>
        <!-- <div class="text-component text-center margin-bottom-md"> -->
          <!-- </div> -->
          
        <div class="margin-bottom-xxl text-center">
          <h3>or sign-up</h3>
          <button class="btn orange btn--border btn--md">Create an account</button>
        </div>
    </main>


    

    <?php
        require './partials/footer.php';
    ?>
</body>
</html>