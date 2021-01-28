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
function showModal(){
  document.getElementById("modal").style.display = 'block';
}
function closeModal(){
  document.getElementById("modal").style.display = 'none';
}

//Carousel