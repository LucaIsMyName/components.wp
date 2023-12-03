/**
 * @name flip-content.js
 * @description
 */
function convertHTMLSpecialChars(text) {
    return text.replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#039;');
}
document.addEventListener('DOMContentLoaded', (event) => {

    const flipElements = document.querySelectorAll('[data-flip-content]');

    flipElements.forEach(element => {
        let words = JSON.parse(element.getAttribute('data-flip-content'));
        words = words.map(word => convertHTMLSpecialChars(word));
        const iteration = element.getAttribute('data-flip-content-iteration') || 1;
        const duration = parseInt(element.getAttribute('data-flip-content-duration')) || 1000;

        let currentWordIndex = 0;
        let currentIteration = 0;

        const flipWord = () => {

            element.innerHTML = words[currentWordIndex];
            currentWordIndex++;

            if (currentWordIndex >= words.length) {
                currentWordIndex = 0;
                currentIteration++;
            }

            if (currentIteration < iteration || iteration === 'loop') {
                setTimeout(flipWord, duration);
            }
        };

        setTimeout(flipWord, duration);
    });
});
