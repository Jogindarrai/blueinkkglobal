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
document.addEventListener('DOMContentLoaded', function () {
    const desktopMedia = window.matchMedia('(min-width: 992px)');

    document.querySelectorAll('.mega-dropdown').forEach(function (dropdown) {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.mega-menu');

        if (!toggle || !menu) return;

        let closeTimer = null;

        function openMegaMenu() {
            if (!desktopMedia.matches) return;

            clearTimeout(closeTimer);

            document.querySelectorAll('.mega-dropdown.mega-open')
                .forEach(function (item) {
                    if (item !== dropdown) {
                        item.classList.remove('mega-open');

                        const itemToggle =
                            item.querySelector('.dropdown-toggle');

                        const itemMenu =
                            item.querySelector('.mega-menu');

                        itemToggle?.classList.remove('show');
                        itemToggle?.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                        itemMenu?.classList.remove('show');
                    }
                });

            dropdown.classList.add('mega-open');
            toggle.classList.add('show');
            menu.classList.add('show');
            toggle.setAttribute('aria-expanded', 'true');
        }

        function scheduleClose() {
            if (!desktopMedia.matches) return;

            clearTimeout(closeTimer);

            closeTimer = setTimeout(function () {
                dropdown.classList.remove('mega-open');
                toggle.classList.remove('show');
                menu.classList.remove('show');
                toggle.setAttribute('aria-expanded', 'false');
            }, 400);
        }

        function cancelClose() {
            clearTimeout(closeTimer);
        }


        toggle.addEventListener('mouseenter', openMegaMenu);
        toggle.addEventListener('mouseleave', scheduleClose);

        menu.addEventListener('mouseenter', cancelClose);
        menu.addEventListener('mouseleave', scheduleClose);

        toggle.addEventListener('click', function (event) {
            if (!desktopMedia.matches) return;

            event.preventDefault();
            event.stopImmediatePropagation();

            if (dropdown.classList.contains('mega-open')) {
                scheduleClose();
            } else {
                openMegaMenu();
            }
        });

        /*
         * Keyboard accessibility
         */
        toggle.addEventListener('focus', openMegaMenu);

        dropdown.addEventListener('focusout', function (event) {
            if (
                desktopMedia.matches &&
                !dropdown.contains(event.relatedTarget)
            ) {
                scheduleClose();
            }
        });
    });


    desktopMedia.addEventListener('change', function () {
        document.querySelectorAll('.mega-dropdown').forEach(
            function (dropdown) {
                dropdown.classList.remove('mega-open');

                const toggle =
                    dropdown.querySelector('.dropdown-toggle');

                const menu =
                    dropdown.querySelector('.mega-menu');

                toggle?.classList.remove('show');
                menu?.classList.remove('show');
                toggle?.setAttribute('aria-expanded', 'false');
            }
        );
    });
});


function initializeCountryDirectory() {
    const directory = document.getElementById('countriesGrid');
    const searchInput = document.getElementById('countrySearch');
    const resultCount = document.getElementById('visibleCountryCount');
    const emptyState = document.getElementById('countriesEmptyState');

    if (!directory || !searchInput || !resultCount || !emptyState) {
        return;
    }

    /*
     * Vite HMR या duplicate initialization से बचाता है.
     */
    if (directory.dataset.filterInitialized === 'true') {
        return;
    }

    directory.dataset.filterInitialized = 'true';

    const filterButtons = Array.from(
        document.querySelectorAll('.country-filter-btn')
    );

    const countryColumns = Array.from(
        directory.querySelectorAll('.country-column')
    );

    let selectedRegion = 'all';

    function filterCountries() {
        const searchValue = searchInput.value
            .trim()
            .toLocaleLowerCase();

        let visibleCount = 0;

        countryColumns.forEach(function (column) {
            const countryName = (
                column.dataset.name || ''
            ).toLocaleLowerCase();

            const countryRegion = column.dataset.region || '';

            const matchesSearch =
                searchValue === '' ||
                countryName.includes(searchValue);

            const matchesRegion =
                selectedRegion === 'all' ||
                countryRegion === selectedRegion;

            const shouldShow = matchesSearch && matchesRegion;

            column.classList.toggle('is-hidden', !shouldShow);

            if (shouldShow) {
                visibleCount += 1;
            }
        });

        resultCount.textContent = String(visibleCount);

        emptyState.classList.toggle(
            'show',
            visibleCount === 0
        );
    }

    searchInput.addEventListener('input', filterCountries);

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            selectedRegion = button.dataset.region || 'all';

            filterButtons.forEach(function (filterButton) {
                filterButton.classList.remove('active');
                filterButton.setAttribute(
                    'aria-pressed',
                    'false'
                );
            });

            button.classList.add('active');
            button.setAttribute('aria-pressed', 'true');

            filterCountries();
        });
    });

    filterCountries();
}

if (document.readyState === 'loading') {
    document.addEventListener(
        'DOMContentLoaded',
        initializeCountryDirectory
    );
} else {
    initializeCountryDirectory();
}