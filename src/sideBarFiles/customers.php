<div class="mx-auto">
  <div class="customers p-4">
    <div class="">
      <div class="flex justify-between border-b-2 py-2 relative" id="addElement">
        <div>
          <h1>Customers List</h1>
        </div>
        <a href="" id="open">
          <div class="flex items-center bg-blue-500 p-1 text-white rounded">
            <span class="flex w-5 h-5" style="fill: #fff;"><?=$svg['plus']?></span>
            <span>new customer</span>
          </div>
        </a>

        <div class="form-container absolute right-0" id="form-container">
          <div>
            <form action="" class="rounded">
              <div class="close ml-auto flex items-center text-center justify-center rounded">
                <a href=""class="text-center flex items-center rounded-full justify-center text-2xl">&times;</a>
              </div>
              <div>
                <label for="">Payment:</label>
                <select name="" id="">
                  <option value="" selected disabled>select</option>
                  <option value="">Paid</option>
                  <option value="">Not paid</option>
                </select>
              </div>
              <div>
                <label for="">Balance:</label>
                <input type="text">
              </div>
              <div>
                <input type="submit" class="btn" value="Create">
              </div>
            </form>
          </div>
        </div>
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
          <th>Payment</th>
          <th>Balance</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="[&>*:nth-child(even)]:bg-[#ddd]">
        <tr class=" hover:">
          <td>1</td>
          <td>3904003</td>
          <td>Not Paid</td>
          <td>30000</td>
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
  </div>
</div>