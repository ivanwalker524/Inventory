<div class="mx-auto">
  <div>
    <div class="customers p-4">
      <div class="flex items-center flex-wrap">
        <div class="wd">
          <a href="">
            <div class="ht sales flex items-start text-white justify-around rounded-2xl shadow-1 overflow-hidden whitespace-no-wrap" id="clicked">
              <div class="flex flex-col items-center">
                <span class="text-2xl">Products</span>
                <span class="font-bold">1</span>
              </div>
              <div class="flex flex-col mt-8">
                <div class="icon-rounded icon-big border-color bg-auto ">
                  <span></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="wd">
          <a href="">
            <div class="ht sales flex items-start text-white justify-around rounded-2xl shadow-1 overflow-hidden whitespace-no-wrap">
              <div class="flex flex-col items-center">
                <span class="text-2xl">Total Customers</span>
                <span class="font-bold">1</span>
              </div>
              <div class="flex flex-col mt-8">
                <div class="icon-rounded icon-big border-color bg-auto ">
                  <span></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="wd">
          <a href="">
            <div class="ht sales flex items-start text-white justify-around rounded-2xl shadow-1 overflow-hidden whitespace-no-wrap">
              <div class="flex flex-col items-center">
                <span class="text-2xl">category</span>
                <span class="font-bold">1</span>
              </div>
              <div class="flex flex-col mt-8">
                <div class="icon-rounded icon-big border-color bg-auto ">
                  <span></span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="wd">
          <a href="">
            <div class="ht sales flex items-start text-white justify-around rounded-2xl shadow-1 overflow-hidden whitespace-no-wrap">
              <div class="flex flex-col items-center">
                <span class="text-2xl">Total Sales</span>
                <span class=" font-bold">Ugx.300,000</span>
              </div>
              <div class="flex flex-col mt-8">
                <div class="icon-rounded icon-big border-color bg-auto ">
                  <span><?=$svg['money-check']?></span>
              </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="">
        <div class="flex justify-between border-b-2 py-2 relative" id="addElement">
          <div>
            <h1 class="text-2xl">Sales List</h1>
          </div>
          <a href="" id="open">
            <div class="flex items-center bg-blue-500 p-1 text-white rounded">
              <span class="flex w-5 h-5" style="fill: #fff;"><?=$svg['plus']?></span>
              <span>Add sales</span>
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
            <th>Order Id</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="[&>*:nth-child(even)]:bg-[#ddd]">
          <tr class=" hover:">
            <td>1</td>
            <td>3904003</td>
            <td>samsung S22 Ultra</td>
            <td>3500</td>
            <td>2</td>
            <td>7000</td>
            <td class="w-fit">
              <div class="flex items-center text-center">
                <a href="" class="bg-red-500 w-6 rounded flex items-center justify-center p-1">
                  <span class="flex w-3 h-3  fill-white"><?=$svg['trash']?></span>
                </a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>