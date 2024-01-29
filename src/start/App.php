<?php require "src/Components/card.php" ?>
<div class="flex mx-auto relative">
  <div class="sideBar hide" id="toggle">
    <div class="w-full h-full overflow-y-auto" style="background-color: #e9faff;">
      <?php include "src/Components/sideBar.php" ?>
    </div>
  </div>
  <span class="bars"><?=$svg['bars']?></span>
  <div class="main">
    <div class="w-full h-full overflow-y-auto">
      <div class="sticky top-0" style="z-index: 999;">
      <?php include "src/Components/nav.php" ?>
      </div>
      <div>
        <?php 
          require("src/sideBarFiles/".$link.".php");
          include "src/Components/card.php"
          ?>
      </div>
    </div>
  </div>
</div>

