<?php include "card.php" ?>
<div class="sideBar-container">
  <div class="text-white" >
    <div id="logo-1" class="w-full sticky z-40 top-0">
      <?php include "src/components/logo.php"?>
    </div>
    <div id="logo-2" class="w-full sticky z-40 top-0">
      <?php include "src/components/logo-2.php" ?>
    </div>
    <div class="sideBar-links">
      <div>
        <a href="?ref=App&link=home" class="<?php if($link === "home") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['house']?></span>
            <span>Home</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=customers" class="<?php if($link === "customers") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['users']?></span>
            <span>Customers</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=category" class="<?php if($link === "category") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['layer-group']?></span>
            <span>Category</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=products" class="<?php if($link === "products") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['table-cells']?></span>
            <span>Products</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=stocks" class="<?php if($link === "stocks") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['table-cells']?></span>
            <span>Stocks</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=sales" class="<?php if($link === "sales") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['calendar']?></span>
            <span>Salles List</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=expense" class="<?php if($link === "expense") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['cash-register']?></span>
            <span>Expense</span>
          </div>
        </a>
      </div>
      <div>
        <a href="?ref=App&link=staff" class="<?php if($link === "staff") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['users']?></span>
            <span>Staff</span>
          </div>
        </a>
      </div>
      <div class="d-flex">
        <a href="?ref=App&link=settings" class="<?php if($link === "settings") echo "active" ?>">
          <div class="d-flex">
            <span class="icons"><?=$svg['gear']?></span>
            <span>Settings</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>