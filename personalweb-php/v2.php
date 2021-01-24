<?php
    include "components/header.php";
    include "components/data.php";
    include "components/navbar.php";
?>

<section id="<?= $menuNav['nav'][0]['id'];?>">
    <div class="bg-gray-200 h-screen">
        <div class="flex flex-col items-center justify-center h-3/6 bg-center bg-cover bg-no-repeat m-auto" style="background-image: url(<?= $jumbotron['bgimg'];?>);">
            <h1 class="text-white text-center text-3xl md:text-6xl font-bold uppercase"><?= $jumbotron['head'][0]['text'];?></h1>
            <h2 class="text-white text-center text-xl md:text-2xl tracking-widest font-light uppercase"><?= $jumbotron['head'][1]['text'];?></h2>
            <div class="absolute top-64 float-center md:float-left">
                <img class="h-36 md:h-44 w-36 md:w-44 rounded-full" src="<?= $profile['img'];?>" alt="">
            </div>
        </div>
        <div class="w-10/12 h-full m-auto">
            <p class="text-center font-light text-lg md:text-2xl py-28"><?= $profile['desc'];?></p>
        </div>
    </div>
    <div class="grid md:grid-cols-2 h-full w-11/12 m-auto">
        <div class="box-content h-auto w-full">
            <?php foreach($skillv2 as $sv2):?>
                <h1><?= $sv2['lan'];?></h1><div class="w-full h-8 border-2 border-gray-800 rounded-r-full" style="width: <?= $sv2['bar'];?>; background-color: <?= $sv2['color'];?>;"><p><?= $sv2['bar'];?></p></div>
            <?php endforeach;?>
        </div>
        <div class="box-content h-auto w-full">
        </div>
    </div>
</section>

<section id="<?= $menuNav['nav'][1]['id'];?>">
    <div class="bg-gray-300 h-screen"></div>
</section>

<?php include "components/form-email.php";?>
<?php include "components/footer.php"; ?>