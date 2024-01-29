<div class="category-container w-full flex flex-wrap" id="cat-5" style="display: <?=in_array(5,[$_SESSION['category']]) ? 'flex' : 'none'?>;" data-name="Perfumes">
  <div class="w-1/3 pr-3">
    <p class="label">Name</p>
    <input type="text" class="i border" name="name[]">
  </div>
  <div class="w-1/3 pr-3">
    <p class="label">Capacity</p>
    <input type="text" class="i border" name="capacity[]">
  </div>
</div>