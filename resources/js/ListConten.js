document.addEventListener('DOMContentLoaded', () => {
    const listItems = document.getElementById('list-Items');


    //
    const shortList = document.getElementById('shortlist');
    const shortNoneList = document.getElementById('shortnonlist');
    // Handle click event for "Short By List"
    shortList.addEventListener('click', () => {

        localStorage.setItem('isShortList', 'false');
        updateListItems();

        // console.log("Short List" + ' '+localStorage.getItem('isShortList'))
    });

    // Handle click event for "Short None List"
    shortNoneList.addEventListener('click', () => {

        localStorage.setItem('isShortList', 'true');
        updateListItems(); // Update the list items display
        console.log("Short List None" + ' '+localStorage.getItem('isShortList'))

    });

    function updateListItems() {
        const isShortList = localStorage.getItem('isShortList');
        if (isShortList === null || isShortList === 'false') {
            listItems.classList.remove('grid-rows-1');
            listItems.classList.add('grid-cols-3');


            //
            shortList.classList.remove('bg-white');
            shortList.classList.add('bg-danger');

            shortList.classList.remove('text-sceondary');
            shortList.classList.add('text-white');

            //
            shortNoneList.classList.remove('bg-danger');
            shortNoneList.classList.add('bg-white');

            shortNoneList.classList.remove('text-white');
            shortNoneList.classList.add('text-sceondary');
        } else {
            listItems.classList.remove('grid-cols-3');
            listItems.classList.add('grid-rows-1');


            shortList.classList.remove('bg-danger');
            shortList.classList.add('bg-white');

            shortList.classList.remove('text-white');
            shortList.classList.add('text-sceondary');

            //
            shortNoneList.classList.remove('bg-white');
            shortNoneList.classList.add('bg-danger');

            shortNoneList.classList.remove('text-sceondary');
            shortNoneList.classList.add('text-white');

        }
    }

    // Initialize the list items display based on current localStorage value
    updateListItems();
});


