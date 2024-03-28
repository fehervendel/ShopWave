/*
document.getElementById("categoryDropdown").addEventListener("mouseover", function () {
    document.getElementById("categoryMenu").style.display = "block";
});

document.getElementById("categoryDropdown").addEventListener("mouseleave", function() {
    document.getElementById("categoryMenu").style.display = "none";
});
*/
document.addEventListener("DOMContentLoaded", function() {
    var categoryDropdown = document.getElementById("categoryDropdown");
    var categoryMenu = document.getElementById("categoryMenu");

    var categoryDropdownPhone = document.getElementById("categoryDropdown-phone");
    var categoryMenuPhone = document.getElementById("categoryMenu-phone");

    categoryDropdown.addEventListener("mouseover", function () {
        categoryMenu.style.display = "flex";
    });

    categoryDropdown.addEventListener("mouseleave", function() {
        categoryMenu.style.display = "none";
    });

    categoryDropdownPhone.addEventListener("click", function () {
        if(categoryMenuPhone.style.display === "block") {
            categoryMenuPhone.style.display = "none";
        } else {
            categoryMenuPhone.style.display = "block"
        }
    });

    categoryDropdownPhone.addEventListener("onclick", function() {

    });
});
