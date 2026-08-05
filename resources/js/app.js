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


function initializeCountrySearchComponents() {
    const components = document.querySelectorAll(
        '[data-country-search-component]'
    );

    components.forEach(function (component) {
        if (component.dataset.searchInitialized === 'true') {
            return;
        }

        component.dataset.searchInitialized = 'true';

        const input = component.querySelector(
            '[data-country-search-input]'
        );

        const suggestions = component.querySelector(
            '[data-country-search-suggestions]'
        );

        const clearButton = component.querySelector(
            '[data-country-search-clear]'
        );

        const suggestionCount = component.querySelector(
            '[data-country-suggestion-count]'
        );

        const suggestionEmpty = component.querySelector(
            '[data-country-search-suggestion-empty]'
        );

        const options = Array.from(
            component.querySelectorAll(
                '[data-country-search-option]'
            )
        );

        const directorySelector =
            component.dataset.directoryTarget || '';

        const directory = directorySelector
            ? document.querySelector(directorySelector)
            : null;

        const countryColumns = directory
            ? Array.from(
                directory.querySelectorAll('.country-column')
            )
            : [];

        const filterButtons = directory
            ? Array.from(
                document.querySelectorAll('.country-filter-btn')
            )
            : [];

        const directoryResultCount =
            document.getElementById('visibleCountryCount');

        const directoryEmpty =
            document.getElementById('countriesEmptyState');

        let selectedRegion = 'all';

        if (!input || !suggestions) {
            return;
        }

        function normalizeValue(value) {
            return String(value || '')
                .trim()
                .toLocaleLowerCase();
        }

        function openSuggestions() {
            suggestions.classList.add('is-open');
            input.setAttribute('aria-expanded', 'true');
        }

        function closeSuggestions() {
            suggestions.classList.remove('is-open');
            input.setAttribute('aria-expanded', 'false');
        }

        function updateSearch() {
            const searchValue = normalizeValue(input.value);

            let visibleSuggestions = 0;
            let visibleDirectoryCountries = 0;

            /*
             * Dropdown suggestions
             */
            options.forEach(function (option) {
                const countryName = normalizeValue(
                    option.dataset.name
                );

                const countryRegion =
                    option.dataset.region || '';

                const matchesName =
                    searchValue === '' ||
                    countryName.includes(searchValue);

                const matchesRegion =
                    selectedRegion === 'all' ||
                    countryRegion === selectedRegion;

                const shouldShow =
                    matchesName && matchesRegion;

                option.hidden = !shouldShow;

                if (shouldShow) {
                    visibleSuggestions += 1;
                }
            });

            if (suggestionCount) {
                suggestionCount.textContent =
                    String(visibleSuggestions);
            }

            if (suggestionEmpty) {
                suggestionEmpty.hidden =
                    visibleSuggestions !== 0;
            }

            if (clearButton) {
                clearButton.hidden = searchValue === '';
            }

            /*
             * Directory country cards
             */
            countryColumns.forEach(function (column) {
                const countryName = normalizeValue(
                    column.dataset.name
                );

                const countryRegion =
                    column.dataset.region || '';

                const matchesName =
                    searchValue === '' ||
                    countryName.includes(searchValue);

                const matchesRegion =
                    selectedRegion === 'all' ||
                    countryRegion === selectedRegion;

                const shouldShow =
                    matchesName && matchesRegion;

                column.classList.toggle(
                    'is-hidden',
                    !shouldShow
                );

                if (shouldShow) {
                    visibleDirectoryCountries += 1;
                }
            });

            if (
                directory &&
                directoryResultCount
            ) {
                directoryResultCount.textContent =
                    String(visibleDirectoryCountries);
            }

            if (
                directory &&
                directoryEmpty
            ) {
                directoryEmpty.classList.toggle(
                    'show',
                    visibleDirectoryCountries === 0
                );
            }
        }

        input.addEventListener('focus', function () {
            updateSearch();
            openSuggestions();
        });

        input.addEventListener('input', function () {
            updateSearch();
            openSuggestions();
        });

        input.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeSuggestions();
                input.blur();
                return;
            }

            if (event.key === 'Enter') {
                const firstVisibleOption =
                    options.find(function (option) {
                        return !option.hidden;
                    });

                if (firstVisibleOption) {
                    event.preventDefault();
                    window.location.href =
                        firstVisibleOption.href;
                }
            }
        });

        if (clearButton) {
            clearButton.addEventListener('click', function () {
                input.value = '';
                updateSearch();
                openSuggestions();
                input.focus();
            });
        }

        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                selectedRegion =
                    button.dataset.region || 'all';

                filterButtons.forEach(
                    function (filterButton) {
                        filterButton.classList.remove(
                            'active'
                        );

                        filterButton.setAttribute(
                            'aria-pressed',
                            'false'
                        );
                    }
                );

                button.classList.add('active');

                button.setAttribute(
                    'aria-pressed',
                    'true'
                );

                updateSearch();
            });
        });

        document.addEventListener('click', function (event) {
            if (!component.contains(event.target)) {
                closeSuggestions();
            }
        });

        updateSearch();
    });
}

if (document.readyState === 'loading') {
    document.addEventListener(
        'DOMContentLoaded',
        initializeCountrySearchComponents
    );
} else {
    initializeCountrySearchComponents();
}