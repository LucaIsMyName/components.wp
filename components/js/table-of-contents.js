// document.addEventListener("DOMContentLoaded", function () {
//     // Function to slugify and randomize the string
//     function slugifyAndRandomize(text) {
//         return text.toLowerCase().replace(/\s+/g, '-') + '--' + Math.random().toString(36).substr(2, 9);
//     }

//     console.log(slugifyAndRandomize("Hallo Luca Mack"))



//     // Function to create the table of contents for a single element
//     function createTableOfContents(tocElement) {
//         const targetSelector = tocElement.getAttribute('data-table-of-contents');
//         const linkFlag = tocElement.getAttribute('data-table-of-contents-link') === 'true';
//         const headlineSelectors = tocElement.getAttribute('data-table-of-contents-headlines').split(', ');

//         const targetElement = document.querySelector(targetSelector);
//         if (!targetElement) return;

//         const headlines = targetElement.querySelectorAll(headlineSelectors);
//         const tocList = document.createElement('ul');

//         headlines.forEach((headline) => {
//             const id = slugifyAndRandomize(headline.textContent);
//             headline.id = id;

//             const listItem = document.createElement('li');
//             if (linkFlag) {
//                 const link = document.createElement('a');
//                 link.href = `#${id}`;
//                 link.textContent = headline.textContent;
//                 listItem.appendChild(link);
//             } else {
//                 listItem.textContent = headline.textContent;
//             }

//             tocList.appendChild(listItem);
//         });

//         tocElement.appendChild(tocList);
//     }

//     // Find all elements with the data-table-of-contents attribute and process each
//     const allTOCElements = document.querySelectorAll('[data-table-of-contents]');
//     allTOCElements.forEach(createTableOfContents);
// });

document.addEventListener("DOMContentLoaded", function () {
    // Function to slugify and randomize the string
    function slugifyAndRandomize(text) {
        return text.toLowerCase().replace(/\s+/g, '-') + '--' + Math.random().toString(36).substr(2, 9);
    }

    function createNestedTOC(headlines, linkFlag) {
        const tocList = document.createElement('ul');
        tocList.setAttribute('data-table-of-contents-level', '1');
        let currentLevel = 1; // Starting level
        let currentList = tocList;

        headlines.forEach((headline) => {
            const level = parseInt(headline.tagName.substring(1)); // Extract the level number from tag name (e.g., H2 -> 2)
            const id = slugifyAndRandomize(headline.textContent);
            headline.id = id;

            // Adjusting list nesting based on headline levels
            while (level > currentLevel) {
                let newSubList = document.createElement('ul');
                newSubList.setAttribute('data-table-of-contents-level', level.toString());

                let newListItem = document.createElement('li');
                newListItem.appendChild(newSubList);
                currentList.appendChild(newListItem);
                currentList = newSubList;
                currentLevel++;
            }
            while (level < currentLevel) {
                currentList = currentList.parentElement.parentElement; // Move up to the parent <ul>
                currentLevel--;
            }

            const listItem = document.createElement('li');
            if (linkFlag) {
                const link = document.createElement('a');
                link.href = `#${id}`;
                link.textContent = headline.textContent;
                listItem.appendChild(link);
            } else {
                listItem.textContent = headline.textContent;
            }

            currentList.appendChild(listItem);
        });

        return tocList;
    }



    // Function to create the table of contents for a single element
    // function createTableOfContents(tocElement) {
    //     const targetSelector = tocElement.getAttribute('data-table-of-contents');
    //     const linkFlag = tocElement.getAttribute('data-table-of-contents-link') === 'true';
    //     const headlineSelectors = tocElement.getAttribute('data-table-of-contents-headlines').split(', ');

    //     const targetElement = document.querySelector(targetSelector);
    //     if (!targetElement) return;

    //     const headlines = targetElement.querySelectorAll(headlineSelectors);
    //     const tocList = createNestedTOC(headlines, linkFlag);

    //     tocElement.appendChild(tocList);
    // }
    function createTableOfContents(tocElement) {
        const targetSelector = tocElement.getAttribute('data-table-of-contents');
        const linkFlag = tocElement.getAttribute('data-table-of-contents-link') === 'true';
        const headlineSelectors = tocElement.getAttribute('data-table-of-contents-headlines').split(',').map(s => s.trim());
    
        const targetElement = document.querySelector(targetSelector);
        if (!targetElement) return;
    
        const headlines = targetElement.querySelectorAll(headlineSelectors);
        const tocList = createNestedTOC(headlines, linkFlag);
    
        tocElement.appendChild(tocList);
    }
    

    // Find all elements with the data-table-of-contents attribute and process each
    const allTOCElements = document.querySelectorAll('[data-table-of-contents]');
    allTOCElements.forEach(createTableOfContents);
});
