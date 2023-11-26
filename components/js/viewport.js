/**
 * @name viewport.js
 * @version 0.1
 * @author luca mack
 * @todo make it work
 * @description provides a html data attribute, if you set it to any element the js checks if the element is currently visible in the viewport 
 */

// Tracks if .block is in Viewport
document.addEventListener(
    "scroll",
    function () {
      if (document.querySelector("[data-viewport]")) {
        document.querySelector("[data-viewport]").setAttribute("data-viewport", "false");
        //   alert("Works");
      }
    },
    {
      passive: true,
    }
  );
  