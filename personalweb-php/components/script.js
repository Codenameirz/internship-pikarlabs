window.onscroll = function(){
  scrollFunction()
};
//Jika discroll sampai height mencapai 2150px, maka tampilkan button, jika tidak sembunyikan button
function scrollFunction(){
  if (document.body.scrollTop > 2150 || document.documentElement.scrollTop > 2150){
    document.getElementById("scrollTop").style.display = "block";
  } else {
    document.getElementById("scrollTop").style.display = "none";
  }
}
//Jika diklik maka akan kembali ke atas
function topFunction(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//Buka dan tutup modal
function showModal(id){
  document.getElementById(id).style.display = 'block';
  //Carousel swiperjs infinite loop
  var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
      nextEl: '#next',
      prevEl: '#prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}
function closeModal(id){
  document.getElementById(id).style.display = 'none';
}
