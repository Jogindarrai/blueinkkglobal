import './bootstrap';
import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');

    if (!header) return;

    window.addEventListener('scroll', () => {
        header.classList.toggle('is-sticky', window.scrollY > 50);
    });
});