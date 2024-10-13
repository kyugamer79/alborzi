// const marquee = document.getElementById('marquee');
// let marqueeWidth = marquee.offsetWidth;
// let containerWidth = marquee.parentElement.offsetWidth;

// function animateMarquee() {
//     let startPosition = containerWidth;
//     let endPosition = -marqueeWidth;

//     function step() {
//         // Change this value to increase or decrease the speed
//         startPosition -= 2; // Increase this value for faster scrolling

//         if (startPosition < endPosition) {
//             startPosition = containerWidth; // Reset to start position
//         }
//         marquee.style.transform = `translateX(${startPosition}px)`;
//         requestAnimationFrame(step);
//     }
//     requestAnimationFrame(step);
// }

// animateMarquee();