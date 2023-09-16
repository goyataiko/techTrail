

const scaleImage = document.querySelector('.scaleImage');
let scaleValue = 1.0;

window.addEventListener('scroll', function () {
   //현 스크롤 위치
   const scrollTop = window.scrollY || document.documentElement.scrollTop;
   scaleValue = 1+ scrollTop * 0.002;

   scaleImage.style.transform = `scale(${scaleValue})`; 
});