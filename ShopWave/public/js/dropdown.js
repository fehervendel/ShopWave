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

    categoryDropdown.addEventListener("mouseover", function () {
        categoryMenu.style.display = "flex";
    });

    categoryDropdown.addEventListener("mouseleave", function() {
        categoryMenu.style.display = "none";
    });
});
