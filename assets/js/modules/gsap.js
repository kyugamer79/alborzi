import {
    gsap
} from "gsap";

import {
    ScrollTrigger
} from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)

import {
    Observer
} from "gsap/Observer";


gsap.registerPlugin(Observer);

// Text Effect
document.addEventListener('DOMContentLoaded', () => {
    const textContainer = document.querySelector('.text-gsap');

    if (textContainer) {
        const content = textContainer.innerHTML.trim().split(' ').map(word => `<span>${word}</span>`).join(' ');
        textContainer.innerHTML = content;

        const words = textContainer.querySelectorAll('span');

        gsap.fromTo(words, {
            color: "#A3A3A3"
        }, {
            color: "#1C1917",
            duration: 1,
            stagger: 0.1,
            scrollTrigger: {
                trigger: textContainer,
                start: "top 80%",
                end: "bottom 20%",
                scrub: true
            }
        });
    } else {
        console.warn('No element found with the class "text-gsap"');
    }
});

// Footer
document.addEventListener('DOMContentLoaded', () => {
    const textContainer = document.querySelector('.footer-text-gsap');

    if (textContainer) {
        const content = textContainer.innerHTML.trim().split(' ').map(word => `<span>${word}</span>`).join(' ');
        textContainer.innerHTML = content;

        const words = textContainer.querySelectorAll('span');

        textContainer.addEventListener('mouseenter', () => {
            gsap.to(words, {
                color: "#27272A",
                duration: 0.5,
                stagger: 0.1,
                ease: 'power1.inOut'
            });
        });

        textContainer.addEventListener('mouseleave', () => {
            gsap.to(words, {
                color: "#71717A",
                duration: 0.5,
                stagger: 0.1,
                ease: 'power1.inOut'
            });
        });
    } else {
        console.warn('No element found with the class "text-gsap"');
    }
});

// Front Page Service Section
