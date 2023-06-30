document.addEventListener("DOMContentLoaded", function() {
    var cuadroTextoElement = document.querySelector(".cuadro-texto");

    cuadroTextoElement.style.opacity = 0;
    cuadroTextoElement.style.transform = "translateY(20px)";
    
    setTimeout(function() {
        cuadroTextoElement.style.transition = "opacity 1s, transform 1s";
        cuadroTextoElement.style.opacity = 1;
        cuadroTextoElement.style.transform = "translateY(0)";
    }, 500);
});
