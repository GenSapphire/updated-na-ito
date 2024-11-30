// For responsive navbar on mobile version
document.addEventListener('DOMContentLoaded', () => {
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
        menu.classList.toggle('bx-x'); 
        navbar.classList.toggle('open'); 

        if (navbar.classList.contains('open')) {
            navbar.style.right = '0';
        } else {
            navbar.style.right = '-100%'; 
        }
    };
});

// For image slider
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slider img");
    const navLinks = document.querySelectorAll(".slider-nav a");
    const slider = document.querySelector(".slider");
    let currentIndex = 0; 
    const totalSlides = slides.length;


    function changeSlide(index) {
       
        const slideWidth = slides[0].clientWidth;
        const offset = slideWidth * index;


        slider.style.transform = `translateX(-${offset}px)`;
    }


    navLinks.forEach((link, index) => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); 

          
            currentIndex = index;

            
            changeSlide(currentIndex);

           
            resetAutoSlide();
        });
    });

   
    let autoSlideInterval = setInterval(function () {
        currentIndex = (currentIndex + 1) % totalSlides; // Move to next slide, loop back to the first slide
        changeSlide(currentIndex);
    }, 3000); 

    
    function resetAutoSlide() {
        clearInterval(autoSlideInterval); 
        autoSlideInterval = setInterval(function () {
            currentIndex = (currentIndex + 1) % totalSlides;
            changeSlide(currentIndex);
        }, 3000); 
    }
});