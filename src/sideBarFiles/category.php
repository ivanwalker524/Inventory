<?php include "src/dataHandle/categories.inc.php" ?>
<div class="mx-auto">
  <div class="customers p-4">
          <?php
    include "src/functions/getDataFromDb.php";
    ?>
    <div class="">
      <div class="flex justify-between border-b-2 py-2 relative" id="addElement">
        <div>
          <h1>Categories List</h1>
        </div>
        <div class="flex items-center flex-row-reverse">
          <a href="./link=category&creatCategory" id="open">
            <div class="flex items-center bg-blue-500 p-1 text-white rounded relative">
              <span class="flex w-5 h-5" style="fill: #fff;"><?=$svg['plus']?></span>
              <span>New category</span>
              <!-- <span class="text-red-500 text-3xl absolute" id="times">&times;</span> -->
            </div>
          </a>
          <div>
            <?php
            if(!empty($error)){
              foreach($error as $erors){
                ?>
                <p class="text-red-500 mb-1"><?$error?></p>
                <?php
              }
            }
            ?>
          </div>

          <div class="form-container" id="form-container">
            <div>
              <form action="" method="post" class="rounded">
                <div>
                  <input type="text" class="inputCat" name="categoryName">
                </div>
                <div>
                  <input type="submit" class="btn" value="Create" name="category">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-end">
      <form class="flex items-center py-2">
        <label for="search">Search:</label>
        <input type="text" id="search" class="search">
      </form>
    </div>
    <table class="w-full">
      <thead>
        <tr>
          <th>ID</th>
          <th>SERIAL NUMBER</th>
          <th>CATEGORY NAME</th>
          <th>QTY</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <?php
      //query for total records
      $query = $conn->query("SELECT * FROM categories") or die($conn->error);

      //get total records
      $nunRows = $query->num_rows;

      //records per page
      $rpp = 10;

      //total number of pages
      $totalPages = ceil($nunRows / $rpp);

      $page = isset($_GET['page']) ? (intval($_GET['page']) < 1 ? 1 : (intval($_GET['page']) > $totalPages ? $totalPages : intval($_GET['page']))) : 0;

      $result = ($page) * $rpp;

      //get result
      $categories = $conn->query("SELECT * FROM categories limit $result,$rpp") or die($conn->error);
      // $cat = categories('categories');
      ?>
      
      <tbody class="[&>*:nth-child(even)]:bg-[#ddd]">
      <?php
        foreach($categories as $row){
      ?>
        <tr class=" hover:">
          <td><?=$row['id']?></td>
          <td><?=$row['categoryId']?></td>
          <td><?=$row['categoryName']?></td>
          <td><?=$row['id']?></td>
          <td class="w-fit">
            <div class="flex items-center text-center">
              <a href="./?link=category&edit=<?=$row['id']?>" class=" bg-blue-500 mr-1 w-6 flex items-center justify-center rounded py-1 px-2 flex">
                <span class="flex w-3 h-3 fill-white"><?=$svg['pen-to-square']?></span>
              </a>
              <a href="./?link=category&del=<?=$row['id']?>"  class="bg-red-500 w-6 rounded flex items-center justify-center p-1">
                <span class="flex w-3 h-3  fill-white"><?=$svg['trash']?></span>
              </a>
            </div>
          </td>
        </tr>
      <?php
        } ?>
      </tbody>
    </table>
    <div class="pagination">
      <div class="flex justify-between">
        <div class="flex items-center">
          <span class="font-bold text-green-700"><?=$page?></span> to <span class=" font-bold text-green-700"><?=$totalPages?></span> entities
        </div>
        <div class="flex items-center">
          <a href="./?link=category&page<?=$page <= 1 ? 1 : intval($page) - 1 ?>" class="pr-2 mr-2">prev</a>
          <div class=" flex items-center relative justify-center text-center">
            <?php
            for($x = 1; $x <= $totalPages; $x++){ ?>
              <a  class="bg-blue-600 px-2 absolute"><?=$page == $x ? $page: $page?></a>
            <?php }
            ?>
          </div>
          <a href="./?link=category&page=<?=$page >= $totalPages ? $totalPages : $page + 1?>" class="pl-2 ml-2">Next</a>
        </div>
      </div>
    </div>
  </div>
</div>