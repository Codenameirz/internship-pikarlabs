<?php
  include "components/header.php";
  include "components/data.php";
?>


  <div class="flex flex-col h-full">
    <div class="grid md:grid-cols-2 gap-x-8 gap-y-8 w-11/12 h-full py-16 m-auto">
      <div class="bg-gray-300 rounded-md py-6">
        <div class="box-content bg-gray-500 w-11/12 m-auto rounded">
          <img class="w-full p-2" src="<?= $portfolio['preview'];?>" alt="">
          <p class="text-center">Tampilan awal landing page</p>
        </div>
        <div class="box-content bg-gray-500 w-11/12 m-auto rounded">
          <img class="w-full p-2" src="<?= $portfolio['img'];?>" alt="">
          <p class="text-center">Tampilan awal landing page</p>
        </div>
      </div>
      <div class="bg-gray-300 rounded-md py-6">
        <h1 class="text-2xl text-black">Judul</h1>
      </div>
    </div>
  </div>

<?php include "components/footer.php";?>