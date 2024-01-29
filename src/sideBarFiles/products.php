<div class="mx-auto">
  <div>
    <div class="customers p-4">
            

      <?php
      include "src/db/config.inc.php";

      $section = isset($_GET['section']) ? $_GET['section'] : 'list';
      if($section == 'new'){
        // $id = 'NULL';
        // $category = 0;
        // $size = '';
        // $color = '';
        // $name = '';
        // $capacity = '';
        // $make = '';
        // $sellingPrice = 0;
        // $buyingPrice = 0;
        // $qty = 0;
        if(!isset($_SESSION['category'])) $_SESSION['category'] = 0;
        if(isset($_POST['saveData'])){
          echo '<pre>';
          print_r($_POST);
          echo '</pre>';
          // $id= is_numeric($_POST['id']) ? mysqli_real_escape_string($conn,intval($_POST['id'])) : 'NULL';
          
          $category = isset($_POST['category']) ? mysqli_real_escape_string($conn,intval($_POST['category'])) : 0;

          $size = isset($_POST['size']) ? mysqli_real_escape_string($conn,$_POST['size'][0]): '';

          $color = isset($_POST['color']) ? mysqli_real_escape_string($conn,$_POST['color'][0]) : '222222';

          $name = isset($_POST['name']) ? mysqli_real_escape_string($conn,$_POST['name'][0]) : '';

          $sellingPrice =  mysqli_real_escape_string($conn,intval($_POST['sellingPrice']));
          
          $buyingPrice = mysqli_real_escape_string($conn,intval($_POST['buyingPrice']));

          $qty = mysqli_real_escape_string($conn,intval($_POST['qty']));

          $_SESSION['category'] = $category;

          $sql = "INSERT INTO products(productName,categoryId,buyingPrice,sellingPrice,qty,size,color) VALUES(?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE `productName`=values(`productName`),`categoryId`=values(`categoryId`),`buyingPrice`=values(`buyingPrice`),`sellingPrice`=values(`sellingPrice`),`qty`=values(`qty`),`size`=values(`size`),`color`=values(`color`)";
          $stmt=$conn->prepare($sql) or die($conn->error);
          $stmt->bind_param('siiiiss',$name,$category,$buyingPrice,$sellingPrice,$qty,$size,$color);
          $stmt->execute();
          $stmt->close();
          // header("location: ./?link=products&section=new");

        }
        ?>
        <div style="max-width: 100%;" class="h-full w-full mx-auto flex">
          <form action="./?link=products&section=new" method="post" class="cat-form w-full flex flex-row-reverse flex-wrap items-start" enctype="multipart/form-data">
            <div class="break">
              <div class="m-2 b-bottom">
                <input type="hidden" name="id" />
                <div class=" w-full flex flex-wrap">
                  <p class="label w-full text-lg font-bold text-gray-600">Product Categories</p>
                  <?php
                  $qr = $conn->query("SELECT * FROM categories order by categoryName asc") or die($conn->error);
                  while($row = $qr->fetch_assoc()){
                    ?>
                      <label class="radio flex items-center flex-flex-row-reverse font-semibold relative" style="padding: 6px;">
                        <input 
                          type="radio"
                          name="category"
                          value="<?=$row['id']?>" 
                          <?=($_SESSION['category'] == $row['id'] ? 'checked="true"' : '') ?>
                          onchange="showInputs(<?=$row['id']?>)"
                          required
                          />
                          <pre class="ml-1 font-sans "><?=$row['categoryName']?></pre>
                          <span class="checkmark"></span>
                      </label>
                    <?php
                  }
                  ?>
                </div>
              </div>
            </div>
            <div class="break">
              <div class="m-2">
                <p class="w-full font-bold mt-4 mb-2 text-lg">Product <span id="product-category" class="text-green-500 font-bold"></span></p>
                <?php
                foreach(glob("src/Products/*.php") as $i) require $i;
                ?>
                <div class="w-full flex flex-wrap">
                  <div class="w-1/3 pr-3">
                    <p class="label">Buying Price</p>
                    <input type="number" name="buyingPrice" class="i" required>
                  </div>
                  <div class="w-1/3 pr3">
                    <p class="label">Selling Price</p>
                    <input type="number" name="sellingPrice" class="i border" required>
                  </div>
                  <div class="w-1/3 pl-3">
                    <p class="label">Quantity</p>
                    <input type="number" name="qty" class="i border" required>
                  </div>
                </div>
                <div class="w-full my-2">
                  <button type="submit" class="product-btn1 w-full border rounded " name="saveData">Save Product</button>
                  <a href="./?link=products&section=list" class="product-btn2 my-2 text-center block w-full font-bold rounded border">View All Products</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <?php
      }
      else {
        ?>
        <div class="">
          <div class="flex justify-between border-b-2 py-2 relative" id="addElement">
            <div>
              <h1 class="text-2xl">Products List</h1>
            </div>
            <a href="./?link=products&section=new">
              <div class="flex items-center bg-blue-500 p-1 text-white rounded">
                <span class="flex w-5 h-5" style="fill: #fff;"><?=$svg['plus']?></span>
                <span>new product</span>
              </div>
            </a>
          </div>
        </div>
        <div class="flex justify-end">
          <form class="flex items-center py-2">
            <label for="search">Search:</label>
            <input type="text" id="search" class="border">
          </form>
        </div>
        <table class="w-full">
          <thead>
            <tr>
              <th>#</th>
              <th>ID</th>
              <th>Product Name</th>
              <th>Buying</th>
              <th>Selling</th>
              <th>Qty</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="[&>*:nth-child(even)]:bg-[#ddd]">
            <tr class=" hover:">
              <td>1</td>
              <td>3904003</td>
              <td>samsung S22 Ultra</td>
              <td>3000</td>
              <td>3500</td>
              <td>10</td>
              <td class="w-fit">
                <div class="flex items-center text-center">
                  <a href="" class=" bg-blue-500 mr-1 w-6 flex items-center justify-center rounded py-1 px-2 flex">
                    <span class="flex w-3 h-3 fill-white"><?=$svg['pen-to-square']?></span>
                  </a>
                  <a href="" class="bg-red-500 w-6 rounded flex items-center justify-center p-1">
                    <span class="flex w-3 h-3  fill-white"><?=$svg['trash']?></span>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <?php
      }
        ?>
    </div>
  </div>
</div>