import "./bootstrap";

// Flowbite
import "flowbite";

// Preline
import "preline";

// Initialize Carousel with smooth transitions
document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll("[data-carousel-item]");
    const prevButton = document.querySelector("[data-carousel-prev]");
    const nextButton = document.querySelector("[data-carousel-next]");

    let currentIndex = 0;

    function showSlide(index) {
        items.forEach((item, i) => {
            if (i === index) {
                // Fade in the new slide
                item.classList.remove("hidden");
                item.style.opacity = "0";
                setTimeout(() => {
                    item.style.transition = "opacity 700ms ease-in-out";
                    item.style.opacity = "1";
                }, 10);
            } else {
                // Fade out other slides
                item.style.opacity = "0";
                setTimeout(() => {
                    item.classList.add("hidden");
                }, 700);
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showSlide(currentIndex);
    }

    if (items.length > 0) {
        showSlide(0); // Show first slide

        if (nextButton) {
            nextButton.addEventListener("click", nextSlide);
        }

        if (prevButton) {
            prevButton.addEventListener("click", prevSlide);
        }

        // Auto-advance every 3 seconds
        setInterval(nextSlide, 3000);
    }
});
