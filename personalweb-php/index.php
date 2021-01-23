<?php
    include "components/header.php";
    include "components/data.php";
?>

<nav class="flex flex-row items-center justify-center w-full h-20 bg-gray-900">
    <img class="h-20 w-20 cursor-pointer" src="<?= $menuNav['logo'];?>" alt="">
</nav>

<div class="grid md:grid-cols-2 w-11/12 gap-x-12 md:gap-x-20 gap-y-1 py-3 items-center justify-between h-screen m-auto">
<?php foreach($previewVer as $prev):?>
    <div class="box-content w-4/5 h-auto md:h-3/5 bg-gray-300 m-auto cursor-pointer rounded-lg transform md:hover:-translate-y-3 hover:shadow-lg md:hover:shadow-2xl md:transition md:duration-400 p-1">
        <a href="<?= $prev['href'];?>">
            <img class="h-4/6 w-full m-auto p-4" src="<?= $prev['img'];?>" alt="">
            <h1 class="text-center text-lg md:text-xl lg:text-2xl font-bold"><?= $prev['h1'];?></h1>
            <p class="text-center text-sm md:text-base lg:text-lg font-light"><?= $prev['caption'];?></p>
        </a>
    </div>
<?php endforeach;?>
</div>

<?php include "components/footer.php";?>