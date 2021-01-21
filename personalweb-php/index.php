<?php
    include "components/header.php";
    include "components/data.php";
?>

<nav class="w-full h-20 bg-gray-900">
</nav>

<div class="grid md:grid-cols-2 gap-x-20 md:gap-x-48 gap-y-4 items-center justify-between h-screen m-auto">
<?php foreach($previewVer as $prev):?>
    <div class="box-content w-96 h-56 bg-gray-400 m-auto cursor-pointer rounded-lg transform hover:-translate-y-1 hover:shadow-2xl transition duration-300">
        <a href="<?= $prev['href'];?>">
            <img class="h-56 w-full m-auto p-4" src="components/<?= $prev['img'];?>" alt="">
        </a>
    </div>
<?php endforeach;?>
</div>

<?php include "components/footer.php";?>