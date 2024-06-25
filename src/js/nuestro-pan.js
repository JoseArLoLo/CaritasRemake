let currentIndex = 0;
let visibleSlides = 4;

function moveLeft() {
    const slides = document.querySelectorAll('.carousel__slide');
    const totalSlides = slides.length;

    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalSlides - visibleSlides;
    }
    updateCarousel(visibleSlides);
}

function moveRight() {
    const slides = document.querySelectorAll('.carousel__slide');
    const totalSlides = slides.length;

    if (currentIndex < totalSlides - visibleSlides) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarousel(visibleSlides);
}

function updateCarousel(visibleSlides) {
    const track = document.querySelector('.carousel__track');
    const newTransformValue = -currentIndex * (100 / visibleSlides);
    track.style.transform = `translateX(${newTransformValue}%)`;
}

function handleResize() {
    if (window.matchMedia('(min-width: 992px)').matches) {
        visibleSlides = 4;
    } else if (window.matchMedia('(min-width: 768px)').matches) {
        visibleSlides = 3;
    } else if (window.matchMedia('(min-width: 480px)').matches) {
        visibleSlides = 2;
    } else {
        visibleSlides = 1;
    }
}

handleResize();
window.addEventListener('resize', handleResize);