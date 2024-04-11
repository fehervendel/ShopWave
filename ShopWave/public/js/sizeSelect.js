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
            document.getElementById('selected_size').value = selectedSize;
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    let backButton = document.getElementById('back-button');
        backButton.addEventListener('click', () => {
            window.history.back();
        });
});
