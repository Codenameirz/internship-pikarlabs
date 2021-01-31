<?php
  include "components/header.php";
  include "components/data.php";
  include "components/function.php";

  $id = $_GET['id'];
  $index = getId($portfolio, $id);
?>

  <?php if(isset($id)):?>
    <?php if($index == true):?>
      <div class="flex flex-col h-full">
        <div class="grid md:grid-cols-2 gap-x-8 gap-y-8 w-11/12 h-full py-16 m-auto">
          <div class="bg-gray-300 rounded-md py-6">
            <div class="py-4">
              <div class="box-content bg-gray-600 w-11/12 m-auto rounded">
                <img class="w-full h-full pt-2 pl-2 pr-2" src="img/<?= $portfolio[$id]['preview'];?>" alt="">
                <p class="text-center text-white p-2"><?= $portfolio[$id]['descprev'];?></p>
              </div>
            </div>
            <div class="py-4">
              <div class="box-content bg-gray-600 w-11/12 m-auto rounded">
                <img class="w-full pt-2 pl-2 pr-2" src="img/<?= $portfolio[$id]['img'];?>" alt="">
                <p class="text-center text-white p-2"><?= $portfolio[$id]['descimg'];?></p>
              </div>
            </div>
          </div>
          <div class="bg-gray-300 rounded-md py-8">
            <div class="w-10/12 m-auto">
              <h1 class="text-2xl text-black text-center md:text-left font-bold"><?= $portfolio[$id]['name'];?></h1>
              <h1 class="text-2xl text-black text-center md:text-left font-bold">(<?= $portfolio[$id]['year']?>)</h1>
              <p class="text-black py-12 text-center md:text-left text-lg"><?= $portfolio[$id]['desc'];?></p>
            </div>
            <div class="grid md:grid-cols-2 w-10/12 m-auto md:justify-between gap-x-8 gap-y-4 pb-8">
              <button class="bg-green-500 w-full h-12 text-white rounded-md border-2 border-green-500 hover:bg-transparent hover:text-green-500 transition duration-500 m-auto" onclick="showModal('modal')">Galeri</button>
              <a href="<?= $portfolio[$id]['url'];?>" target="_blank"><button class="bg-green-500 w-full px-4 h-12 text-white rounded-md border-2 border-green-500 hover:bg-transparent hover:text-green-500 transition duration-500 m-auto">Kunjungi</button></a>
            </div>
            <div class="w-10/12 justify-center m-auto">
              <a href="v2.php#portfolio"><button class="bg-gray-800 h-12 w-full text-white rounded-md border-2 border-gray-800 hover:bg-transparent hover:text-gray-800 transition duration-500 ease-out">Kembali</button></a>
            </div>
          </div>
        </div>
      </div>
      <?php else:?>
      <div class="flex flex-col m-auto h-screen items-center justify-center">
        <h1 class="text-black text-2xl font-bold rounded-md pb-8">Portfolio dengan id "<?= $_GET['id'];?>" tidak dapat ditemukan</h1>
        <a href="v2.php#portfolio"><button class="bg-gray-800 h-12 w-full px-12 text-white rounded-md border-2 border-gray-800 hover:bg-transparent hover:text-gray-800 transition duration-500 ease-out">Kembali</button></a>
      </div>
      <?php endif;?>
  <?php endif;?>

<?php include "components/modal.php";?>

<?php include "components/footer.php";?>