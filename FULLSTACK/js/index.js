document.addEventListener("DOMContentLoaded", function() {
    var spanElement = document.querySelector("#inicio h2 span");
    spanElement.style.opacity = 0;

    setTimeout(function() {
        spanElement.style.transition = "opacity 1.5s ease-in-out";
        spanElement.style.opacity = 1;
    }, 500);
});
