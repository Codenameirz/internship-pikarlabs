<?php
  include "header.php";
  include "data.php";
?>

<div id="modalemail" class="w-11/12 fixed z-30 h-full w-full bg-black bg-opacity-80 py-12">
  <p class="flex flex-col m-auto text-black bg-green-500 w-10/12 md:w-1/2 text-center text-lg font-medium p-1 rounded-t-md uppercase"><?= $modalEmail['notif'];?></p>
  <div class="flex flex-col bg-gray-300 w-10/12 md:w-1/2 m-auto items-center justify-center rounded-b-md p-2">
    <h1 class="py-8 text-xl text-black md:text-2xl"><?= $modalEmail['message'];?></h1>
    <button class="m-auto bg-red-600 w-1/3 text-black sm:2/5 md:1/2 lg:w-1/4 p-2 text-lg font-semibold rounded-md hover:bg-red-700 transition duration-300 transform hover:scale-105 focus:outline-none" onclick="closeModal('modalemail')">Tutup</button>
  </div>
</div>