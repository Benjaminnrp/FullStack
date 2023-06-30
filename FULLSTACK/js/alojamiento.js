document.addEventListener("DOMContentLoaded", function() {
    var hotelesSection = document.querySelector("#hoteles");
    var hotelElements = document.querySelectorAll(".hotel");

    hotelesSection.style.opacity = 0;
    hotelElements.forEach(function(hotelElement) {
        hotelElement.style.opacity = 0;
        hotelElement.style.transform = "translateY(20px)";
    });

    setTimeout(function() {
        hotelesSection.style.transition = "opacity 1s";
        hotelesSection.style.opacity = 1;

        hotelElements.forEach(function(hotelElement) {
            hotelElement.style.transition = "opacity 1s, transform 1s";
            hotelElement.style.opacity = 1;
            hotelElement.style.transform = "translateY(0)";
        });
    }, 500);
});

