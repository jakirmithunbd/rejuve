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

    document.addEventListener('DOMContentLoaded', function () {
        var accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(function (item) {
            var header = item.querySelector('.accordion-header button');

            header.addEventListener('click', function () {
                item.classList.toggle('open');
            });
        });
    });

    // Booking system with Ajax

    function BookingData(data = {}) {
        $('#load-salon-posts').html(
            `<div class='preloader'><img src="${ajax.preloader}"/></div>`
        );
        const nonce = ajax.nonce;

        const pageId = document.querySelector('#rejuve-single-product');

        wp.ajax
            .post('productData', { data, id: pageId.dataset.page_id })
            .done((res) => {
                console.log(res);
                if (res) {
                    if (res.data.banner_image) {
                        $('.page-banner-img').html(
                            `<img src="${res.data.banner_image.image.url}" alt="Image" />`
                        );
                    }
                }
            })
            .fail((err) => {
                console.log(err);
            });
    }

    BookingData();
})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    var accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(function (accordionItem) {
        var treatmentItems = accordionItem.querySelectorAll('.treatment-item');
        var accordionHeader = accordionItem.querySelector('.accordion-header');

        // Add click event listener to each treatment item
        treatmentItems.forEach(function (item) {
            item.addEventListener('click', function () {
                // Toggle the 'selected' class
                this.classList.toggle('selected');

                // Get the selected treatment items for the current accordion
                var selectedTreatmentItems = accordionItem.querySelectorAll(
                    '.treatment-item.selected'
                );
                var selectedProducts = Array.from(selectedTreatmentItems).map(
                    function (selectedItem) {
                        return {
                            name: selectedItem.querySelector('.t-item-name')
                                .textContent,
                            price: selectedItem.querySelector('.t-item-price')
                                .textContent,
                        };
                    }
                );

                // Update selected items within the accordion-header for the current accordion
                updateAccordionHeader(accordionHeader, selectedProducts);
            });
        });

        // Load selected treatment items from localStorage on page load
        var storedProducts = localStorage.getItem(
            'selectedProducts_' + accordionItem.dataset.catId
        );
        if (storedProducts) {
            storedProducts = JSON.parse(storedProducts);
            treatmentItems.forEach(function (item) {
                var itemName = item.querySelector('.t-item-name').textContent;
                var isSelected = storedProducts.some(function (product) {
                    return product.name === itemName;
                });

                if (isSelected) {
                    item.classList.add('selected');
                }
            });

            // Update selected items within the accordion-header on page load
            updateAccordionHeader(accordionHeader, storedProducts);
        }
    });

    // Add click event listener to each selected-item for removal
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('selected-item')) {
            var selectedItemText = event.target.textContent.split(' (')[0];

            // Find the corresponding accordion item
            var accordionItem = document.querySelector(
                '.treatment-item.selected .accordion-item'
            );

            // Remove the selected class from the corresponding treatment item
            var selectedItem = Array.from(
                accordionItem.querySelectorAll('.treatment-item.selected')
            ).find(function (item) {
                return (
                    item.querySelector('.t-item-name').textContent ===
                    selectedItemText
                );
            });

            if (selectedItem) {
                selectedItem.classList.remove('selected');

                // Get the updated selected treatment items for the current accordion
                var selectedTreatmentItems = accordionItem.querySelectorAll(
                    '.treatment-item.selected'
                );
                var selectedProducts = Array.from(selectedTreatmentItems).map(
                    function (selectedItem) {
                        return {
                            name: selectedItem.querySelector('.t-item-name')
                                .textContent,
                            price: selectedItem.querySelector('.t-item-price')
                                .textContent,
                        };
                    }
                );

                // Update selected items within the accordion-header for the current accordion
                updateAccordionHeader(
                    accordionItem.querySelector('.accordion-header'),
                    selectedProducts
                );
            }
        }
    });
});

function updateAccordionHeader(header, selectedProducts) {
    var selectedItemsContainer = header.querySelector(
        '.selected-items-container'
    );

    // Clear existing content
    selectedItemsContainer.innerHTML = '';

    // Add selected product information to the accordion header
    selectedProducts.forEach(function (product) {
        var selectedItem = document.createElement('span');
        selectedItem.textContent = product.name + ' (' + product.price + ')';
        selectedItem.classList.add('selected-item');
        selectedItemsContainer.appendChild(selectedItem);
    });

    // Save selected products to localStorage for the current accordion
    var accordionId = header.closest('.accordion-item').dataset.catId;
    localStorage.setItem(
        'selectedProducts_' + accordionId,
        JSON.stringify(selectedProducts)
    );
}
