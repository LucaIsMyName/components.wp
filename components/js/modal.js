/**
 * @name modal.js
 * @version 0.1
 * @author luca mack
 * @description looks for [data-modal="someId"] element on page and shows it when the corresponfing [data-modal-toggle-open="someId"], [data-modal-toggle-close="someId"] or [data-modal-toggle="someId"]
 * @todo: if id in header changes, also undisplay or change the modal
*/
document.addEventListener('DOMContentLoaded', function () {
    // Get all modal elements with the 'data-modal' attribute
    const modalElements = document.querySelectorAll('[data-modal]');
    let openModalId = null; // Track the currently open modal ID

    // Function to open a modal by setting 'data-modal-active' to 'true'
    function openModal(modalId) {
        const modal = document.querySelector(`[data-modal][id="${modalId}"]`);
        if (modal) {
            modal.setAttribute('data-modal-active', 'true');
            modal.setAttribute('aria-hidden', 'false');
            modal.setAttribute('tab-index', '0');

            // Update the URL fragment identifier to match the modal ID
            window.location.hash = modalId;
            // Disable scrolling on the main content
            document.body.style.overflow = 'hidden';
            console.log('modal opened');
            openModalId = modalId; // Set the currently open modal ID
        }
    }

    // Function to close a modal by setting 'data-modal-active' to 'false'
    function closeModal(modalId) {
        const modal = document.querySelector(`[data-modal][id="${modalId}"]`);
        if (modal) {
            modal.setAttribute('data-modal-active', 'false');
            modal.setAttribute('aria-hidden', 'true');
            modal.setAttribute('tab-index', '-1');
            // Remove the modal ID from the URL fragment
            window.location.hash = '';
            // Enable scrolling on the main content
            document.body.style.overflow = 'auto';
            console.log('modal closed');
            openModalId = null; // Reset the currently open modal ID
        }
    }

    // Function to toggle a modal's state (open or close)
    function toggleModal(modalId) {
        if (modalId === openModalId) {
            closeModal(modalId); // Close the modal if it's already open
        } else {
            openModal(modalId);
        }
    }

    // Add click event listeners to buttons with data attributes
    document.addEventListener('click', function (event) {
        const target = event.target;
        const toggleCloseId = target.getAttribute('data-modal-toggle-close');
        const toggleOpenId = target.getAttribute('data-modal-toggle-open');
        const toggleId = target.getAttribute('data-modal-toggle');

        if (toggleCloseId) {
            closeModal(toggleCloseId);
        } else if (toggleOpenId) {
            openModal(toggleOpenId);
        } else if (toggleId) {
            toggleModal(toggleId);
        }
    });

    // Function to check the URL fragment and close the open modal if necessary
    function checkUrlFragment() {
        const currentModalId = window.location.hash.substring(1);
        if (currentModalId !== openModalId) {
            // Close the currently open modal if the hash doesn't match
            closeModal(openModalId);
        }
    }

    // Add an event listener to the window for URL fragment changes
    window.addEventListener('hashchange', function () {
        checkUrlFragment();
    });

    // Call the function to check the URL fragment initially
    checkUrlFragment();
});
