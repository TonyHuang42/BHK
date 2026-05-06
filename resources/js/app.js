import './bootstrap';
import Swiper from 'swiper/bundle';

// Initialize Swiper
document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector(".battleSwiper")) {
        new Swiper(".battleSwiper", {
            slidesPerView: 2.2,
            centeredSlides: true,
            spaceBetween: 100,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.5,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                992: {
                    slidesPerView: 2.2,
                    spaceBetween: 100,
                },
            }
        });
    }
});
