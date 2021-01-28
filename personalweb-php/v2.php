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
    <div class="w-10/12 h-full m-auto text-center py-36">
      <p class="font-light text-lg md:text-2xl"><?= $profile['desc'];?></p>
    </div>
  </div>
  <div class="grid md:grid-cols-2 h-auto w-11/12 m-auto py-16 gap-x-12 gap-y-8">
    <div class="box-content h-auto w-full bg-gray-400 rounded-md">
      <h1 class="text-center text-lg font-bold py-1 bg-gray-500 rounded-t-md"><?= $profile['menu'][0]['title'];?></h1>
      <div class="py-8">
      <?php foreach($skill['v2'] as $sv2):?>
        <div class="py-4">
          <div class="w-11/12 h-9 m-auto border-2 border-black">
            <div class="bg-gray-100">
              <div class="h-8" style="width: <?= $sv2['bar'];?>; background-color: <?= $sv2['color'];?>;">
                <div class="text-sm text-right <?= $sv2['logo'];?>" style="font-size: 32px;" ><?= $sv2['bar'];?></div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </div>
    <div class="box-content h-auto w-full bg-gray-400 rounded-md">
      <h1 class="text-center text-lg font-bold py-1 bg-gray-500 rounded-t-md"><?= $profile['menu'][1]['title'];?></h1>
    </div>
  </div>
</section>

<section id="<?= $menuNav['nav'][1]['id'];?>">
<div class="flex flex-col items-center bg-gray-300 h-full md:h-screen">
  <h1 class="text-2xl md:text-4xl text-center font-bold pt-16 md:pt-20"><?= $section[1]['title'];?></h1>
    <div class="grid md:grid-cols-2 w-11/12 py-12 gap-x-4 md:gap-x-24 gap-y-8 items-center justify-between">
      <?php foreach($portfolio as $port):?>
        <div class="group box-content h-auto p-4 w-full bg-gray-400 hover:bg-gray-500 bg-opacity-50 m-auto rounded-md md:rounded-xl cursor-pointer transform lg:hover:-translate-y-1 transition duration-300 shadow-lg hover:shadow-none">
          <div class="bg-black m-auto">
            <img class="h-auto w-full m-auto opacity-100 group-hover:bg-opacity-50 transition duration-500" src="<?= $port['preview'];?>" alt="">
          </div>
          <h1 class="text-center text-xl font-bold p-4"><?= $port['name'];?></h1>
        </div>
      <?php endforeach;?>
    </div>
  </div>
</section>

<?php include "components/form-email.php";?>
<?php include "components/footer.php"; ?>