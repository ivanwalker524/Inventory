<div class="category-container w-full flex flex-wrap" id="cat-2" style="display: <?=in_array(2,[$_SESSION['category']])? 'flex' : 'none'?>;" data-name="Shirts/T-shirts">
  <div class="w-1/3 pr-3">
    <p class="label">Name</p>
    <input type="text" class="i border" name="name[]">
  </div>
  <div class="w-1/3 pr-3">
    <p class="label">Size</p>
    <input type="text" class="i border" name="size[]">
  </div>
  <div class="w-1/3 pr-3">
    <p class="label">Color</p>
    <input type="text" class="i border" name="color[]">
  </div>
</div>