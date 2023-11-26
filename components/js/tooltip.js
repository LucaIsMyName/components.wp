/**
 * @name tooltip.js
 * @version 0.1
 * @author luca mack
 * @todo tooltip placemement (position in relation to the word/phrase and to the viewport) 
 * @description any element with [data-tooltip="someId"] that has a corresponding [data-tooltip-content="someId"] element anywhere on the page get shown as tooltip in frontend
 
*/


// Get all elements with data-tooltip attribute
const tooltipElements = document.querySelectorAll('[data-tooltip]');

/**
 * @name calculateAvailableSpace
 * @param {*} targetRect 
 * @param {*} tooltipWidth 
 * @param {*} tooltipHeight 
 * @returns 
 */
// Create a function to calculate available space
function calculateAvailableSpace(targetRect, tooltipWidth, tooltipHeight) {
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;

    const space = {
        top: targetRect.top - tooltipHeight,
        bottom: viewportHeight - (targetRect.bottom + tooltipHeight),
        left: targetRect.left - tooltipWidth,
        right: viewportWidth - (targetRect.right + tooltipWidth),
    };

    return space;
}

// Create a function to show the tooltip
function showTooltip(event) {
    const target = event.target;
    const tooltipId = target.getAttribute('data-tooltip');
    const tooltipContent = document.querySelector(`[data-tooltip-content="${tooltipId}"]`);

    // Check if the tooltip content exists
    if (tooltipContent) {
        const targetRect = target.getBoundingClientRect();
        const targetTop = targetRect.top + window.scrollY;
        const targetLeft = targetRect.left + window.scrollX;
        const tooltipMaxWidth = 320;
        const tooltipMinWidth = 180;

        let left, top, tooltipWidth;

        // tooltipContent.style.position = 'absolute';
        // tooltipContent.style.background = 'var(--color-text)';
        // tooltipContent.style.color = 'var(--color-background)';
        // tooltipContent.style.zIndex = '10000';

        // Try placing the tooltip starting from the horizontal center on top
        top = targetTop - tooltipContent.offsetHeight;
        left = targetLeft + targetRect.width / 2 - tooltipContent.offsetWidth / 2;
        tooltipWidth = Math.min(tooltipMaxWidth, Math.max(tooltipMinWidth, tooltipContent.offsetWidth));

        // Check available space and adjust tooltip position if needed
        const availableSpace = calculateAvailableSpace(targetRect, tooltipWidth, tooltipContent.offsetHeight);

        if (top < 0 || availableSpace.top < 0) {
            // Not enough space on top, try bottom
            top = targetTop + targetRect.height;
        }
        if (top + tooltipContent.offsetHeight > window.innerHeight || availableSpace.bottom < 0) {
            // Not enough space on bottom, try right
            top = targetTop + targetRect.height / 2 - tooltipContent.offsetHeight / 2;
            left = targetLeft + targetRect.width;
            tooltipWidth = Math.min(tooltipMaxWidth, Math.max(tooltipMinWidth, tooltipContent.offsetWidth));
        }
        if (left + tooltipContent.offsetWidth > window.innerWidth || availableSpace.right < 0) {
            // Not enough space on right, try left
            top = targetTop + targetRect.height / 2 - tooltipContent.offsetHeight / 2;
            left = targetLeft - tooltipContent.offsetWidth;
            tooltipWidth = Math.min(tooltipMaxWidth, Math.max(tooltipMinWidth, tooltipContent.offsetWidth));
        }

        // Set tooltip position and width, then display it
        tooltipContent.style.left = left + 'px';
        tooltipContent.style.top = top + 'px';
        tooltipContent.style.width = tooltipWidth + 'px';
        tooltipContent.style.display = 'block';
        tooltipContent.style.zIndex = '100000';

    }
}

// Create a function to hide the tooltip
function hideTooltip(event) {
    const tooltipId = event.target.getAttribute('data-tooltip');
    const tooltipContent = document.querySelector(`[data-tooltip-content="${tooltipId}"]`);
    if (tooltipContent) {
        tooltipContent.style.display = 'none';
        tooltipContent.style.zIndex = '-1';
    }
}

// Add event listeners to show and hide tooltips
tooltipElements.forEach((element) => {
    element.addEventListener('mouseenter', showTooltip);
    element.addEventListener('focus', showTooltip);
    element.addEventListener('mouseleave', hideTooltip);
    element.addEventListener('blur', hideTooltip);
});

// Add event listener for window resize
window.addEventListener('resize', () => {
    // Hide tooltips on window resize
    tooltipElements.forEach((element) => {
        const tooltipId = element.getAttribute('data-tooltip');
        const tooltipContent = document.querySelector(`[data-tooltip-content="${tooltipId}"]`);
        if (tooltipContent) {
            tooltipContent.style.display = 'none';
        }
    });
});
