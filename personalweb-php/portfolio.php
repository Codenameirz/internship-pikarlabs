<?php
  include "components/header.php";
  include "components/data.php";
  include "components/function.php";

  $id = $_GET['id'];
  $index = getId($_GET['id'], $portfolio);
?>

  <?php if(isset($_GET['id'])):?>
  <div class="flex flex-col h-full">
    <div class="grid md:grid-cols-2 gap-x-8 gap-y-8 w-11/12 h-full py-16 m-auto">
      <div class="bg-gray-300 rounded-md py-6">
        <div class="py-4">
          <div class="box-content bg-gray-500 w-11/12 m-auto rounded">
            <img class="w-full h-full pt-2 pl-2 pr-2" src="img/<?= $portfolio[$id]['preview'];?>" alt="">
            <p class="text-center text-black p-2"><?= $portfolio[$id]['descprev'];?></p>
          </div>
        </div>
        <div class="py-4">
          <div class="box-content bg-gray-500 w-11/12 m-auto rounded">
            <img class="w-full pt-2 pl-2 pr-2" src="img/<?= $portfolio[$id]['img'];?>" alt="">
            <p class="text-center text-black p-2"><?= $portfolio[$id]['descimg'];?></p>
          </div>
        </div>
      </div>
      <div class="bg-gray-300 rounded-md py-8">
        <h1 class="text-2xl text-black px-8 font-bold"><?= $portfolio[$id]['name'];?></h1>
        <h1 class="text-2xl text-black px-8 font-bold">(<?= $portfolio[$id]['year']?>)</h1>
        <p class="text-black px-8 py-12 text-lg w-11/12"><?= $portfolio[$id]['desc'];?></p>
        <div class="grid md:grid-cols-2 w-10/12 m-auto justify-between gap-x-12 gap-y-4">
          <button class="bg-green-500 w-full md:w-4/5 h-12 text-white rounded-md border-2 border-green-500 hover:bg-transparent hover:text-green-500 transition duration-500 m-auto" onclick="showModal('modal')">Galeri</button>
          <a href="<?= $portfolio[$id]['url'];?>" target="_blank"><button class="bg-green-500 w-full px-8 md:w-4/5 h-12 text-white rounded-md border-2 border-green-500 hover:bg-transparent hover:text-green-500 transition duration-500 m-auto">Kunjungi</button></a>
        </div>
      </div>
    </div>
  </div>
  <?php else:?>
  <div class="flex flex-col m-auto">
    <h1 class="text-black">Tidak ditemukan</h1>
  </div>
  <?php endif;?>

<?php include "components/modal.php";?>

<?php include "components/footer.php";?>