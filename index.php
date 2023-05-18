<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
 	<div class="line-1"></div>
 	<div class="line-2"></div>
 	<div class="line-3"></div>
 	<div class="line-4"></div>
	<h1 class="portfolio">портфолио</h1>
	<div class="text">Василий Викторович Ленточкин</div>
	<div class="position">Директор по развитию</div>
	<div class="details">Тут что-то написано про меня (пока у меня нет структуры в голове)<br><br> Регалии, достижения, компетенции</div>

<div class="current-slide">
  <img src="img/photo_1.png" alt="Slide 1" class="current-slide-item">
</div>
<div class="slider-photo-container">
  <div class="slider-photo">
    <img src="img/photo_2.png" alt="Slide 1" class="slide-item">
    <img src="img/photo_3.png" alt="Slide 2" class="slide-item">
    <img src="img/photo_4.png" alt="Slide 3" class="slide-item" >
    <img src="img/photo_1.png" alt="Slide 4" class="slide-item" >
  </div>
  <img src="img/left.png" class="prev" height="40" onclick="changeSlide(-1)">
  <img src="img/right.png" class="next" height="40" onclick="changeSlide(1)">

</div>

<!--
<div class="gallery">
  <div class="main-image">
    <img src="img/photo_1.png" alt="Big Image">
  </div>
  <div class="thumbnail-images">
    <img src="img/left.png" class="prev-arrow" height="40">
    <div class="images-wrapper">
      <img src="img/photo_1.png" alt="Thumbnail Image">
      <img src="img/photo_3.png" alt="Thumbnail Image">
      <img src="img/photo_4.png" alt="Thumbnail Image">
    </div>
    <img src="img/right.png" class="next-arrow" height="40">
  </div>
</div>
-->

<div class="content">
  <div class="block">
    <h1>Мой путь</h1>
    <p>
      1. У клиента было рабочее кассовое место с учетной системой Artix.<br>
      2. Складской учет не был синхронизирован с системой и велся в ручном режиме на бумаге.<br>
      3. Установленное оборудование устарело, требовало проверки и возможной замены.
    </p>
  </div>
  <div class="block2">
  <h1>Успешные проекты</h1>
    <p>
      1. У клиента было рабочее кассовое место с учетной системой Artix.<br>
      2. Складской учет не был синхронизирован с системой и велся в ручном режиме на бумаге.<br>
      3. Установленное оборудование устарело, требовало проверки и возможной замены.
    </p>
  </div>
  <div class="block3">
    <h1>Планы и амбиции</h1>
    <p>
      1. У клиента было рабочее кассовое место с учетной системой Artix.<br>
      2. Складской учет не был синхронизирован с системой и велся в ручном режиме на бумаге.<br>
      3. Установленное оборудование устарело, требовало проверки и возможной замены.
    </p>
  </div>
  <div class="block4">
    <h1>Награды</h1>
  </div>

<div class="slider">
  <div class="slides-container">
    <div class="slide">
      <img src="img/letter1.png" alt="Slide 1" height="466">
    </div>
    <div class="slide">
      <img src="img/letter2.png" alt="Slide 2" height="466">
    </div>
    <div class="slide">
      <img src="img/letter3.png" alt="Slide 3" height="466">
    </div>
    <div class="slide">
      <img src="img/diplom.webp" alt="Slide 3" height="466">
    </div>
  </div>
  <div class="slider-controls">
    <img src="img/left.svg" class="prev-button" height="40">
    <img src="img/right.svg" class="next-button" height="40">
  </div>
</div>
</div>

<div class="icon-block">
  <a href="#">
    <img src="img/whatsapp.png" alt="Icon 1" class="icon">
  </a>
  <a href="#">
    <img src="img/vk.png" alt="Icon 2" class="icon">
  </a>
  <a href="#">
    <img src="img/telegram.png" alt="Icon 3" class="icon">
  </a>
  <a href="#">
    <img src="img/mail.png" alt="Icon 4" class="icon">
  </a>
</div>

</body>
</html>






<script>
let slideIndex = 0;
const slides = document.querySelectorAll('.slider-photo img');

function showSlides() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  
  for (let i = slideIndex; i < slideIndex + 3; i++) {
    if (slides[i]) {
      slides[i].style.display = 'block';
    }
  }
}

function changeSlide(n) {
  slideIndex += n;
  
  if (slideIndex < 0) {
    slideIndex = slides.length - 3;
  } else if (slideIndex >= slides.length - 2) {
    slideIndex = 0;
  }
  
  showSlides();
}

showSlides();




// Получаем элементы слайдера
const sliderContainer = document.querySelector('.slider-photo-container');
const sliderItems = document.querySelectorAll('.slide-item');
const currentSlide = document.querySelector('.current-slide-item');

// Добавляем обработчики событий на клик по слайдам
sliderItems.forEach((item) => {
  item.addEventListener('click', () => {
    const imgSrc = item.getAttribute('src');
    currentSlide.setAttribute('src', imgSrc);
  });
});



// Слайдер
const slider = document.querySelector('.slider');
const slidesContainer = slider.querySelector('.slides-container');
const prevButton = slider.querySelector('.prev-button');
const nextButton = slider.querySelector('.next-button');

let currentIndex = 0;
const slideWidth = slider.offsetWidth;

prevButton.addEventListener('click', () => {
  currentIndex = Math.max(currentIndex - 1, 0);
  updateSlidePosition();
});

nextButton.addEventListener('click', () => {
  const numSlides = slidesContainer.children.length;
  currentIndex = Math.min(currentIndex + 1, numSlides - 1);
  updateSlidePosition();
});

function updateSlidePosition() {
  slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

</script>