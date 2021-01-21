<?php
    include "components/header.php";
    include "components/navbar.php";
    include "components/data.php";
?>
<section id="top">
    <div class="flex flex-col items-center justify-center h-screen bg-center bg-cover bg-no-repeat m-auto" style="background-image: url(components/<?= $bgimage['bg'];?>);">
        <h1 class="text-white text-center uppercase tracking-wide text-3xl md:text-6xl font-bold">Personal Web PHP</h1>
        <h2 class="text-white text-center uppercase tracking-widest text-xl md:text-3xl font-light">Haris purwanto</h2>
    </div>
</section>

<section id="<?= $menuNav['nav'][0]['id'];?>">
    <div class="flex flex-col items-center h-screen">
        <h1 class="text-2xl md:text-4xl text-center font-bold py-16 md:py-20"><?= $section[0]['judul'];?></h1>
        <img class="" src="" alt="">
        <p class="text-lg md:text-2xl text-center font-light w-10/12"><?= $profile['desc'];?></p>
    </div>
</section>

<section id="<?= $menuNav['nav'][1]['id'];?>">
    <div class="flex flex-col items-center h-screen bg-gray-300">
        <h1 class="text-2xl md:text-4xl text-center font-bold py-16 md:py-20"><?= $section[1]['judul'];?></h1>
        <div class="box-content"></div>
    </div>
</section>

<section id="<?= $menuNav['nav'][2]['id'];?>">
    <div class="flex flex-col items-center h-screen">
        <h1 class="text-2xl md:text-4xl text-center font-bold py-16 md:py-20"><?= $section[2]['judul'];?></h1>
        <form class="flex flex-col h-3/5 w-10/12 bg-gray-400 rounded-xl">
        </form>
    </div>
</section>

<?php include "components/footer.php"; ?>