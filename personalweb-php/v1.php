<?php
    include "components/header.php";
    include "components/navbar.php";
    include "components/data.php";
?>

<!-- Jumbotron -->

<section id="top">
    <div class="flex flex-col items-center justify-center h-screen bg-center bg-cover bg-no-repeat m-auto" style="background-image: url(<?= $jumbotron['bgimg'];?>);">
        <h1 class="text-white text-center uppercase tracking-wide text-3xl md:text-6xl font-bold"><?= $jumbotron['head'][0]['text'];?></h1>
        <h2 class="text-white text-center uppercase tracking-widest text-xl md:text-3xl font-light"><?= $jumbotron['head'][1]['text'];?></h2>
    </div>
</section>

<!-- Profile -->

<section id="<?= $menuNav['nav'][0]['id'];?>">
    <div class="flex flex-col items-center h-full">
        <h1 class="text-2xl md:text-4xl text-center font-bold pt-16 pb-8 md:pt-20"><?= $section[0]['title'];?></h1>
        <img class="h-36 md:h-44 w-36 md:w-44 rounded-full " src="<?= $profile['img'];?>" alt="">
        <p class="text-lg md:text-2xl text-center font-light py-8 w-10/12"><?= $profile['desc'];?></p>
    </div>
    <div class="grid md:grid-cols-2 w-11/12 py-12 gap-x-4 md:gap-x-24 gap-y-8 items-center justify-between m-auto">
        <div class="box-content h-auto w-full m-auto rounded-md">
            <h1 class="text-center bg-gray-400 rounded-t-lg text-xl font-bold"><?= $profile['menu'][0]['title'];?></h1>
            <div class="bg-gray-300">
            <?php foreach($skillv1 as $sv1):?>
                <i class="<?= $sv1['logo'];?>" style="font-size: 64px; text-align: center;"></i>
                <p class="px-4"><?= $sv1['skill'];?></p>
            <?php endforeach;?>
            </div>
        </div>
        <div class="box-content h-auto w-full m-auto rounded-md">
            <h1 class="text-center bg-gray-400 rounded-t-lg text-xl font-bold"><?= $profile['menu'][1]['title'];?></h1>
            <div class="bg-gray-300">
            <?php foreach($education as $edu):?>
                <h1><?= $edu['year'];?></h1>
                <p><?= $edu['school'];?></p>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio -->

<section id="<?= $menuNav['nav'][1]['id'];?>">
    <div class="flex flex-col items-center bg-gray-300 h-full md:h-screen">
        <h1 class="text-2xl md:text-4xl text-center font-bold pt-16 md:pt-20"><?= $section[1]['title'];?></h1>
        <div class="grid md:grid-cols-2 w-11/12 py-12 gap-x-4 md:gap-x-24 gap-y-8 items-center justify-between">
        <?php foreach($portfolio as $value):?>
            <div class="group box-content h-auto w-full bg-gray-400 bg-opacity-50 m-auto rounded-md md:rounded-xl cursor-pointer transform lg:hover:-translate-y-1 transition duration-300 hover:shadow-lg md:hover:shadow-2xl">
                <h1 class="text-center font-bold p-2 text-lg sm:text-xl lg:text-2xl"><?= $value['name'];?> (<?= $value['year'];?>)</h1>
                    <div class="bg-black m-auto w-11/12">
                        <img class="h-auto w-full m-auto opacity-40 group-hover:opacity-100 transition duration-500" src="<?= $value['preview'];?>" alt="">
                    </div>
                <p class="w-4/5 text-center p-2 font-light text-base sm:text-lg md:text-xl m-auto"><?= $value['desc'];?></p>
                <div class="grid grid-cols-2 m-auto justify-between p-4">
                    <button class="border-2 border-green-500 h-8 md:h-12 w-24 md:w-28 m-auto text-sm md:text-base rounded md:rounded-md hover:bg-green-500"><a href="">Galeri</a></button>
                    <button class="bg-green-500 h-8 md:h-12 w-24 md:w-28 m-auto text-sm md:text-base rounded md:rounded-md hover:bg-transparent border-2 hover:bg-transparent border-green-500"><a href="<?= $value['url'];?>">Kunjungi</a></button>
                </div>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</section>

<?php include "components/form-email.php";?>

<?php include "components/footer.php"; ?>