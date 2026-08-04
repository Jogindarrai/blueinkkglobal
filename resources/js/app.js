import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'bootstrap-icons/font/bootstrap-icons.css';
import { Splide } from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import '@splidejs/splide/css';
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.clients-slider');

    if (!slider) return;

    new Splide(slider, {

        type: 'loop',

        perPage: 6,

        gap: '20px',

        arrows: false,

        pagination: false,

        drag: false,

        keyboard: false,

        autoScroll: {

            speed: 1.2,

            pauseOnHover: true,

            pauseOnFocus: false,

        },

        breakpoints: {

            1200: {
                perPage: 5
            },

            992: {
                perPage: 4
            },

            768: {
                perPage: 3
            },

            576: {
                perPage: 2
            }

        }

    }).mount({

        AutoScroll

    });

});
document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');

    if (!header) return;

    window.addEventListener('scroll', () => {
        header.classList.toggle('is-sticky', window.scrollY > 50);
    });
});