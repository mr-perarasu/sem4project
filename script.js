document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector("button");
    button.addEventListener("mouseenter", function () {
        button.style.transform = "scale(1.1)";
    });
    button.addEventListener("mouseleave", function () {
        button.style.transform = "scale(1)";
    });
});
