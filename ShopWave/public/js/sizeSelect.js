document.addEventListener('DOMContentLoaded', function() {
    var defaultSizeElement = document.getElementById('size_' + defaultSize);
    if (defaultSizeElement) {
        defaultSizeElement.classList.add('activeSize');
    }
});
document.addEventListener('DOMContentLoaded', function() {
    var sizes = document.querySelectorAll('.size');

    sizes.forEach(function (size) {
        size.addEventListener('click', function () {
            sizes.forEach(function (s) {
                s.classList.remove('activeSize');
            });
            this.classList.add('activeSize');
            var selectedSize = this.textContent;
            var selectedProductId = this.getAttribute('data-product-id');

            document.getElementById('selected_size').value = selectedSize;

            var routeLink = document.getElementById('addToCartButton').getAttribute('data-link');

            let lastIndex = routeLink.lastIndexOf('/');

            routeLink = routeLink.substring(0, lastIndex + 1) + selectedProductId;

            selectedId = selectedProductId;

            document.getElementById('addToCartButton').setAttribute('data-link', routeLink);

        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    let backButton = document.getElementById('back-button');
        backButton.addEventListener('click', () => {
            window.history.back();
        });
});
