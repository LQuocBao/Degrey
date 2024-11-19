document.addEventListener("DOMContentLoaded", function () {
    var slides = document.querySelectorAll('.banner .slide');
    var dots = document.querySelectorAll('.banner .dot');
    var currentSlide = 0;
    var intervalId;

    function showSlide(n) {
        hideSlides();
        hideDots();
        slides[n].style.display = 'block';
        dots[n].classList.add('active');
    }

    function hideSlides() {
        slides.forEach(function (slide) {
            slide.style.display = 'none';
        });
    }

    function hideDots() {
        dots.forEach(function (dot) {
            dot.classList.remove('active');
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    function startAutoSlide() {
        intervalId = setInterval(nextSlide, 4000);
    }

    showSlide(currentSlide);
    startAutoSlide();

    document.querySelector('.prev').addEventListener('click', function (event) {
        event.preventDefault();
        prevSlide();
    });

    document.querySelector('.next').addEventListener('click', function (event) {
        event.preventDefault();
        nextSlide();
    });

    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            showSlide(index);
            currentSlide = index;
        });
    });
});