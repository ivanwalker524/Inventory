<?php include "src/dataHandle/login.inc.php" ?>
<div class="login-container mx-auto">
  <div class="flex flex-col items-center ">
    <div class="login-profile">
      <img src="src/assets/logo1.bg.png" alt="logo">
    </div>
    <h2 class="text-2xl px-1 mb-2 uppercase font-bold">Stock Management</h2>
    <form action="" method="post" class="">
      <!-- <h2 class="text-center text-2xl font-bold mb-2">Log in</h2> -->
      <div class="flex flex-col">
        <?php
        if(isset($_SESSION['username'])){
          ?>
          <h2 class="font-bold text-red-500 mx-auto" style="font-size: 25px;">
            User:
            <span class=" text-3xl ml-1 font-bold text-green-700" style="font-size: 25px;"><?=$_SESSION['username']?></span>
          </h2>
          <div class="inputs-d rounded shadow-2xl">
            <div class="text-center">
              <?php
              password_hash("walker",PASSWORD_DEFAULT);
              if(!empty($error)){
                foreach($error as $errors){
                  ?>
                  <p class="text-red-500 mb-1"><?=$errors?></p>
                  <?php
                }
              }
              ?>
            </div>
            <input type="password" placeholder="Password" name="userpwd">
            <p class="my-1 py-1 text-center">
              <a href="" class="text-blue-500 font-bold">Forgot password? </a>
              or
              <a href="?switchAccount" class="text-gray-500 font-bold">Switch Account</a>
            </p>

            <input type="submit" class="login-btn font-bold" value="Login" name="login">
          </div>
          <?php
        }
        else{
        ?>
        <div class="inputs-d rounded shadow-2xl">
          <div class="text-center">
            <?php
            password_hash("walker",PASSWORD_DEFAULT);
            if(!empty($error)){
              foreach($error as $errors){
                ?>
                <p class="text-red-500 mb-1"><?=$errors?></p>
                <?php
              }
            }
            ?>
          </div>
          <input type="text" placeholder="Username" name="username">
          <input type="submit" class="login-btn font-bold" value="Next" name="login">
        </div>
        <?php
        }
        ?>
      </div>
    </form>
  </div>
</div>