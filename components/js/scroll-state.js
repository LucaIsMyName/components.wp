/**
 * @name scroll-state.js
 * @version 0.1
 * @author luca mack
 * @description looks for [data-scroll-state] element on page and inserts the correct value (down/up/top/bottom)
*/

(function () {
    var scrollStateElements = document.querySelectorAll('[data-scroll-state]');
    var topRange = 100; // Define the range in pixels for the top area
    var bottomRange = 100; // Define the range in pixels for the bottom area
  
    function setScrollState(element, state) {
      element.setAttribute('data-scroll-state', state);
    }
  
    function checkScrollState() {
      var lastScrollPosition = window.scrollY;
  
      function handleScroll() {
        var currentScrollPosition = window.scrollY;
        var scrollState;
  
        if (currentScrollPosition > lastScrollPosition) {
          scrollState = 'down';
        } else if (currentScrollPosition < lastScrollPosition) {
          scrollState = 'up';
        } else {
          return; // No change in scroll position
        }
  
        // Check if the scroll position is in the top or bottom range
        if (currentScrollPosition < topRange) {
          scrollState = 'top';
        } else if (currentScrollPosition > document.documentElement.scrollHeight - window.innerHeight - bottomRange) {
          scrollState = 'bottom';
        }
  
        Array.prototype.forEach.call(scrollStateElements, function (element) {
          setScrollState(element, scrollState);
        });
  
        lastScrollPosition = currentScrollPosition;
      }
  
      window.addEventListener('scroll', handleScroll);
    }
  
    checkScrollState();
  })();
  
  