<section id="<?= $menuNav['nav'][2]['id'];?>">
    <div class="flex flex-col items-center h-screen">
        <h1 class="text-2xl md:text-4xl text-center font-bold pt-16 pb-8 md:pt-20"><?= $section[2]['title'];?></h1>
        <form class="flex flex-col items-center justify-center h-4/6 w-10/12 bg-gray-500 rounded-md md:rounded-xl">
            <input class="w-11/12 h-8 p-1 md:p-2 m-1 md:m-2 rounded md:rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 placeholder-opacity-50" required type="text" placeholder="Dari">
            <input class="w-11/12 h-8 p-1 md:p-2 m-1 md:m-2 rounded md:rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 placeholder-opacity-50" required type="text" placeholder="Subjek email">
            <textarea class="w-11/12 h-3/5 p-1 md:p-2 m-1 md:m-2 resize-none rounded md:rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 placeholder-opacity-50" required placeholder="Isi email"></textarea>
            <button class="w-11/12 h-8 rounded-full mt-3 md:mt-1 bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring focus:ring-black">Kirim</button>
        </form>
    </div>
</section>