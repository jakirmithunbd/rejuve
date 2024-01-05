window.addEventListener('scroll', function () {
    if (window.pageYOffset > 0) {
        document.querySelector('.rejuve-header').classList.add('sticky');
    } else {
        document.querySelector('.rejuve-header').classList.remove('sticky');
    }
});

function Toggler() {
    const headerToggle = document.querySelector('.bars');
    const headerMainMenu = document.querySelector('.main-header-menu');
    headerToggle.addEventListener('click', function () {
        this.classList.toggle('bar-active');
        headerMainMenu.classList.toggle('show-menu');
    });
}

function headerGutter() {
    // Header gutter for adjusting header height
    const header = document.querySelector('.rejuve-header');
    const header_gutter = document.querySelector('.header_gutter');
    if (header && header_gutter) {
        header_gutter.style.height = header.clientHeight + 'px';
    }
}

function rejuveOnLoad() {
    Toggler();
    headerGutter();
}

window.addEventListener('load', rejuveOnLoad);

function gridAutoFit(element) {
    const elementWidthPercentage = element.getAttribute('grid-width') || 100;

    element.style.gridTemplateColumns = `repeat(auto-fill, minmax(${elementWidthPercentage}px, 1fr))`;
}

function gridCol(element) {
    const dataColValue = element.getAttribute('grid-col');

    element.style.gridTemplateColumns = `repeat(${dataColValue}, 1fr)`;
}

function updateGrid() {
    const gridContainers = document.querySelectorAll('.responsiveGrid');

    gridContainers.forEach(function (gridContainer) {
        const screenWidth = window.innerWidth;
        const gridColValues = gridContainer
            .getAttribute('grid-col')
            .split(',')
            .map((value) => value.trim());
        let gridColumn;

        if (screenWidth >= 1356) {
            gridColumn = gridColValues[0] || 'auto';
        } else if (screenWidth >= 1280) {
            gridColumn = gridColValues[1] || 'auto';
        } else if (screenWidth >= 992) {
            gridColumn = gridColValues[2] || 'auto';
        } else if (screenWidth >= 575) {
            gridColumn = gridColValues[3] || 'auto';
        } else {
            gridColumn = gridColValues[4] || 'auto';
        }

        gridContainer.style.gridTemplateColumns = `repeat(${gridColumn}, 1fr)`;
    });
}

updateGrid();

// Update the grid whenever the window is resized
window.addEventListener('resize', updateGrid);

document.addEventListener('DOMContentLoaded', function () {
    const elementsWithDataCol = document.querySelectorAll('[grid-col]');
    const elementsWithDataWidth = document.querySelectorAll('[grid-width]');

    elementsWithDataCol.forEach(function (element) {
        gridCol(element);
    });

    elementsWithDataWidth.forEach(function (element) {
        gridAutoFit(element);
    });
});

(function ($) {
    // Testimonial  Silder
    $('.slick-slider-init').slick({
        infinite: true,
        draggable: true,
        slidesToShow: 3,
        // autoplay: true,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '.next-previous .prev',
        nextArrow: '.next-previous .next',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    // Vertical slider
    $('.flip-item-wrapper').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        infinite: false,
        arrows: false,
        dots: true,
        vertical: true,
        verticalSwiping: true,
    });

    // Booking system with Ajax

    function BookingData(data = {}) {
        $('#load-salon-posts').html(
            `<div class='preloader'><img src="${ajax.preloader}"/></div>`
        );

        wp.ajax
            .post('loadmore_posts', { data, nonce })
            .done((res) => {
                if (res) {
                    $('#load-salon-posts').html(res.page);
                }
            })
            .fail((err) => {
                console.log(err);
            });
    }

    BookingData();
})(jQuery);
