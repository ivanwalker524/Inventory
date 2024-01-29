
<div class="mx-auto sticky top-0 border-b-2 pt-1">
  <div class="all-center w-full bg-white flex flex-wrap justify-end">
    <div class="logo text-black" id="logo-3">
      <a href="">
        <div class="flex flex-col items-center">
          <div class="flex items-center">
            <div class="logo-profile" style="width: 45px; height:45px;">
              <img src="src/assets/logo1.bg.png" alt="">
            </div>
            <span class=" whitespace-no-wrap ml-1 uppercase font-bold">Walker's</span>
          </div>
          <span class="whitespace-no-wrap">Stock Management</span>
        </div>
      </a>
    </div>
    <div class="flex items-center justify-end">
      <div class="nav">
        <div>
          <select name="" id="" style="width: fit-content;">
            <option value="" selected disabled>Language</option>
            <option value="Eng">Eng</option>
            <option value="Arabic">Arabic</option>
          </select>
        </div>
      </div>
      <div class="nav">
        <a href="">
          <div class="icon-rounded">
            <span><?=$svg['calendar']?></span>
          </div>
        </a>
      </div>
      <div class="nav">
        <a href="">
          <div class="icon-rounded">
            <span><?=$svg['envelope']?></span>
          </div>
        </a>
      </div>
      <div class="nav">
        <a href="">
          <div class="icon-rounded">
            <span class=" tex-white"><?=$svg['bell'] ?></span>
          </div>
        </a>
      </div>
      <div class="nav relative">
        <div class="icon-rounded cursor-pointer" id="dark">
          <span class="absolute" id="night"><?=$svg['moon']?></span>
          <span class="absolute" id="sun"><?=$svg['sun']?></span>
        </div>
      </div>
      <div class="nav">
        <a href="" class="relative">
          <div class="flex items-center">
            <div class="flex items-center" id="dropDown">
              <span class="whitespace-no-wrap">Admin</span>
              <span class="flex w-4 h-4"><?=$svg['caret-down']?></span>
            </div>
          </div>
          <div class="w-1/6 absolute" id="box">
            <div>
              <a href="?logout">Logout</a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>