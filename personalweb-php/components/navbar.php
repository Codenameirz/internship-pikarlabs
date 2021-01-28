<?php include "data.php"; ?>

<nav class="flex flex-row w-full items-center justify-between bg-gray-900 p-3 fixed z-10">
	<a href=""><img class="h-8 sm:h-10 md:h-12 w-8 sm:w-10 md:w-12 mx-2" src="<?= $menuNav['logo'];?>" alt=""></a>
	<ul class="flex flex-row text-gray-400 md:text-white">
		<?php foreach($menuNav['nav'] as $item): ?>
			<li class="mx-3 md:mx-4 text-sm sm:text-base hover:text-white md:hover:text-gray-300 md:hover:bg-gray-700 hover:bg-opacity-50 rounded-full md:px-3 md:py-1 transition duration-800 ease-in-out"><a href="<?= $item['href'];?>"><?= $item['navitem']; ?></a></li>
		<?php endforeach;?>
	</ul>
</nav>
