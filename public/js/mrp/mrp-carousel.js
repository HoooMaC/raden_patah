// Access the Images
let slideImages = document.querySelectorAll('.mrp-slider__item');
// Access the next and prev buttons
let next = document.querySelector('.mrp-slider__next');
let prev = document.querySelector('.mrp-slider__prev');

var counter = 0;

// Code for next button
next.addEventListener('click', slideNext);
function slideNext() {
  slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
  if (counter >= slideImages.length - 1) {
    counter = 0;
  }
  else {
    counter++;
  }
  slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
}

// Code for prev button
prev.addEventListener('click', slidePrev);
function slidePrev() {
  slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
  if (counter == 0) {
    counter = slideImages.length - 1;
  }
  else {
    counter--;
  }
  slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';
}

// Auto sliding
let intervalId; // Variabel untuk menyimpan ID interval

function autoSliding() {
  intervalId = setInterval(timer, 3000);
  function timer() {
    slideNext();
  }
}

autoSliding();

// Stop auto sliding when mouse is over
const container = document.querySelector('.mrp-carousel');

container.addEventListener('mouseover', function () {
  clearInterval(intervalId); // Menggunakan clearInterval untuk menghentikan interval
});

// Resume sliding when mouse is out
container.addEventListener('mouseout', autoSliding);

