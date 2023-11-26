/**
 * @name tables.js
 * @version 0.1
 * @author luca mack
 * @description wraps every table element into a wrapper with overflow area
 
*/

// Wrap each table in a Dov with Overflow X Auto

document.addEventListener("DOMContentLoaded", function () {
  // Get all table elements in the content
  var tables = document.querySelectorAll('table');

  // Loop through each table and wrap it in a div with overflow-x:auto
  tables.forEach(function (table) {
    var wrapperDiv = document.createElement('div');
    wrapperDiv.style.overflowX = 'auto';
    table.parentNode.insertBefore(wrapperDiv, table);
    wrapperDiv.appendChild(table);
    wrapperDiv.setAttribute('class', 'table-wrapper";')
  });
});