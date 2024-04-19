document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.custom-checkbox input[type="checkbox"]');

    checkboxes.forEach(function (checkbox){
        checkbox.addEventListener('change', function () {
            const parentCheckbox = this.closest('.custom-checkbox');

            checkboxes.forEach(function(otherCheckbox){
                if(otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                    otherCheckbox.closest('.custom-checkbox').style.borderColor = 'black';
                }
            });

            if(this.checked){
                parentCheckbox.style.borderColor = '#D87D4A';
            } else {
                parentCheckbox.style.borderColor = 'black';
            }
        });
    });
});
