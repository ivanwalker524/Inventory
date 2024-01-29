<div class="category-container wfull flex flex-wrap" id="cat-1" style="display: <?=in_array(1,[$_SESSION['category']])? 'flex' : 'none'?>;" data-name="Shoes">
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