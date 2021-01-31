<?php
	include "components/header.php";
	include "components/navbar.php";
	include "components/data.php";
	include "components/function.php";

	if(!isset($mailTerkirim)){
		$mailTerkirim = null;
	}

	if($mailTerkirim == true){
		include "components/modal-email.php";
	}
	$id = $_GET['id'];
?>

<button class="hidden fixed h-12 w-12 rounded-full text-black bg-green-500 hover:bg-green-700 bottom-2 md:bottom-3 right-2 md:right-3 md:right-6 z-20 text-lg md:text-2xl font-black focus:outline-none transition duration-500 ease-in-out" onclick="topFunction()" id="scrollTop"><i class="las la-angle-double-up"></i></button>

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
		<h1 class="text-2xl md:text-4xl text-center text-black font-bold pt-16 pb-8 md:pt-20"><?= $section[0]['title'];?></h1>
		<img class="h-36 md:h-44 w-36 md:w-44 rounded-full " src="<?= $profile['img'];?>" alt="">
		<p class="text-lg md:text-2xl text-center text-black font-light py-8 w-10/12"><?= $profile['desc'];?></p>
	</div>
	<div class="py-4">
		<div class="grid grid-cols w-11/12 m-auto">
			<h1 class="w-full bg-blue-500 text-center text-black text-xl font-bold py-1 rounded-t-md"><?= $profile['menu'][0]['title'];?></h1>
			<div class="box-content w-full bg-blue-300 m-auto rounded-b-md">
				<div class="py-4">
					<div class="grid md:grid-cols-3 w-11/12 gap-x-8 gap-y-4 m-auto items-center justify-center">
						<?php foreach($skill['v1'] as $sv1):?>
							<div class="box-content w-full h-full bg-gray-200 m-auto rounded-md shadow-md">
								<h1 class="bg-green-500 w-full p-2 text-center text-black text-xl font-semibold rounded-t-md"><?= $sv1['lan'];?></h1>
								<div class="py-2">
									<img class="h-28 w-28 p-2 m-auto" src="<?= $sv1['logo'];?>" alt="">
								</div>
								<p class="text-center text-black text-lg px-4 py-2"><?= $sv1['skill'];?></p>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-4">
		<div class="grid grid-cols w-11/12 m-auto">
			<h1 class="bg-blue-500 w-full text-center text-black text-xl font-bold py-1 rounded-t-md"><?= $profile['menu'][1]['title'];?></h1>
			<div class="box-content w-full bg-blue-300 m-auto rounded-b-md">
				<div class="py-4">
					<div class="grid md:grid-cols-3 w-11/12 gap-x-8 gap-y-4 m-auto items-center justify-center">
						<?php foreach($education as $edu):?>
							<div class="box-content w-full h-full bg-gray-200 m-auto rounded-md shadow-md">
								<h1 class="bg-green-500 w-full text-center text-black text-xl font-semibold rounded-t-md"><?= $edu['year'];?></h1>
								<p class="text-center text-black text-lg p-6"><?= $edu['school'];?></p>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Portfolio -->

<section id="<?= $menuNav['nav'][1]['id'];?>">
	<div class="flex flex-col items-center bg-gray-300 h-full md:h-screen">
		<h1 class="text-2xl md:text-4xl text-center text-black font-bold pt-16 md:pt-20"><?= $section[1]['title'];?></h1>
		<div class="grid md:grid-cols-2 w-11/12 py-12 gap-x-4 md:gap-x-12 lg:gap-x-24 gap-y-8 items-center justify-between">
		<?php foreach($portfolio as $id => $port):?>
			<div class="group box-content h-auto w-full bg-gray-400 bg-opacity-50 m-auto rounded-md md:rounded-xl cursor-pointer transform lg:hover:-translate-y-1 transition duration-300 shadow-md hover:shadow-none">
				<h1 class="text-center font-bold p-2 text-black text-lg sm:text-xl lg:text-2xl"><?= $port['name'];?> (<?= $port['year'];?>)</h1>
					<div class="bg-black m-auto w-11/12">
						<img class="h-auto w-full m-auto opacity-40 group-hover:opacity-100 transition duration-500" src="img/<?= $port['preview'];?>" alt="">
					</div>
				<p class="w-4/5 text-center p-2 font-light text-black text-base sm:text-lg md:text-xl m-auto"><?= $port['desc'];?></p>
				<div class="grid md:grid-cols-2 w-11/12 m-auto md:justify-between p-4 gap-x-8 gap-y-4">
					<button onclick="showModal('modal')" class="border-2 border-green-500 h-12 w-full m-auto text-black text-sm md:text-base rounded md:rounded-md hover:bg-green-500 transition duration-500 ease-in">Galeri</button>
					<a href="<?= $port['url'];?>" target="_blank"><button class="bg-green-500 h-12 w-full m-auto text-black text-sm md:text-base rounded md:rounded-md hover:bg-transparent border-2 hover:bg-transparent border-green-500 transition duration-500 ease-out">Kunjungi</button></a>
				</div>
			</div>
		<?php endforeach;?>
		</div>
	</div>
</section>

<?php include "components/modal.php";?>

<?php include "components/form-email.php";?>

<?php include "components/footer.php"; ?>