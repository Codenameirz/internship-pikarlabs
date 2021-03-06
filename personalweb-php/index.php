<?php
	include "components/header.php";
	include "components/data.php";
?>

<nav class="flex flex-row items-center justify-center w-full bg-gray-900">
	<img class="h-16 md:h-20 w-16 md:w-20 cursor-pointer p-1" src="<?= $menuNav['logo'];?>" alt="">
</nav>

<div class="grid md:grid-cols-2 w-11/12 gap-x-12 md:gap-x-20 gap-y-1 py-3 items-center justify-between h-screen m-auto">
<?php foreach($index['previewVer'] as $prev):?>
	<div class="group box-content w-4/5 h-auto bg-gray-300 m-auto cursor-pointer rounded-lg transform md:hover:-translate-y-3 hover:shadow-lg md:hover:shadow-2xl md:transition md:duration-700 py-4 md:py-8 p-2 md:p-4">
		<a href="<?= $prev['href'];?>">
			<div class="bg-black m-auto w-11/12">
				<img class="h-auto w-full m-auto opacity-100 group-hover:opacity-40 transition duration-500" src="<?= $prev['img'];?>" alt="">
			</div>
			<h1 class="text-center text-black text-lg md:text-xl lg:text-2xl font-bold md:p-4"><?= $prev['h1'];?></h1>
			<p class="text-center text-black text-sm md:text-base lg:text-lg font-light md:p-4"><?= $prev['caption'];?></p>
		</a>
	</div>
<?php endforeach;?>
</div>

<?php include "components/footer.php";?>