// JavaScript to implement the marquee effect
const marqueeElements = document.querySelectorAll('[data-marquee]');

marqueeElements.forEach((marquee) => {
    const speed = marquee.getAttribute('data-marquee-speed') || 3000; // Default speed is 3000ms
    const reverse = marquee.getAttribute('data-marquee-reverse') || false;

    marquee.style.animation = `marquee ${speed}ms linear infinite ${reverse ? 'reverse' : 'normal'}`;
});