<div id="modal" class="hidden w-11/12 fixed z-20 h-full w-full top-0 left-0 bg-black bg-opacity-80 py-12">
	<div class="w-10/12 bg-white h-auto items-center justify-center m-auto">
			<div class="swiper-container h-full w-full m-auto">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<p class="text-black text-center text-md md:text-lg"><?= $portfolio[$id]['descprev'];?></p>
							<img class="w-full h-auto m-auto" src="img/<?= $portfolio[$id]['preview'];?>" alt="">
						</div>
						<div class="swiper-slide">
						<p class="text-black text-center text-md md:text-lg"><?= $portfolio[$id]['descimg'];?></p>
							<img class="w-full h-auto m-auto" src="img/<?= $portfolio[$id]['img'];?>" alt="">
						</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Arrows -->
					<div id="next" class="swiper-button-next"></div>
					<div id="prev" class="swiper-button-prev"></div>
				</div>
		</div>
		<div class="w-10/12 justify-center m-auto">
			<button class="w-full bg-transparent text-white hover:bg-red-600 " onclick="closeModal('modal')">Close</button>
		</div>
</div>