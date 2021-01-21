<?php include "data.php"; ?>

<nav class="flex flex-row w-full items-center justify-between p-3 bg-transparent fixed">
    <a class="text-white text-xl md:text-3xl mx-2 md:mx-4 font-bold transition duration-800 ease-in-out hover:text-gray-400" href=""><?= $menuNav['judul'];?></a>
    <ul class="flex flex-row text-gray-400">
        <?php foreach($menuNav['nav'] as $item): ?>
            <li class="mx-3 md:mx-4 text-xs md:text-base hover:text-gray-200 md:hover:bg-gray-700 hover:bg-opacity-50 rounded-full md:px-3 md:py-1 transition duration-800 ease-in-out"><a href="<?= $item['href'];?>"><?= $item['navitem']; ?></a></li>
        <?php endforeach;?>
    </ul>
</nav>
