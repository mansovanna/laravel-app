document.addEventListener('DOMContentLoaded', () => {
    const profileButton = document.getElementById('profileButton');
    const profilePopup = document.getElementById('profilePopup');

    const menuApp = document.getElementById('menuList');
    const menuSidebar = document.getElementById('menuSidebar');

    // Toggle sidebar visibility on menuApp click
    menuApp.addEventListener('click', () => {
        menuSidebar.classList.toggle('-left-[100%]');
    });

    // Toggle profile popup visibility on profileButton click
    profileButton.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent the event from bubbling up to the document
        profilePopup.classList.toggle('hidden');
    });

    // Document-level click listener to hide profilePopup and adjust menuSidebar
    document.addEventListener('click', (e) => {
        // Hide profilePopup if click is outside profilePopup and profileButton
        if (!profilePopup.contains(e.target) && !profileButton.contains(e.target)) {
            profilePopup.classList.add('hidden');
        }

<<<<<<< HEAD
        // Adjust menuSidebar if click is outside menuSidebar and menuApp
        if (!menuSidebar.contains(e.target) && !menuApp.contains(e.target)) {
            menuSidebar.classList.add('-left-[100%]');
        }
    });
=======
//         // Adjust menuSidebar if click is outside menuSidebar and menuApp
//         if (!menuSidebar.contains(e.target) && !menuApp.contains(e.target)) {
//             menuSidebar.classList.add('-left-[100%]');
//         }
//     });
// });




// Block of All Categories
const buttonCategories = document.getElementById('buttonSetCategories');
const listCategories = document.getElementById('lists-categorie');
const reteteIconCategories = document.getElementById('reteteIconCategories');

buttonCategories.addEventListener('click', () => {

    reteteIconCategories.classList.toggle('rotate-180');

    if (listCategories.classList.contains('hidden')) {
        listCategories.classList.remove('hidden');
        setTimeout(() => {
            listCategories.classList.add('opacity-100');
            listCategories.classList.add('scale-100');
            listCategories.classList.add('translate-y-0');
            listCategories.classList.remove('opacity-0');
            listCategories.classList.remove('scale-95');
            listCategories.classList.remove('-translate-y-10');
        }, 10);
    } else {

        listCategories.classList.remove('opacity-100');
        listCategories.classList.remove('scale-100');
        listCategories.classList.remove('translate-y-0');
        listCategories.classList.add('opacity-0');
        listCategories.classList.add('scale-95');
        listCategories.classList.add('-translate-y-10');
        setTimeout(() => {
            listCategories.classList.add('hidden');
        }, 300);
    }
});


// End Block of Categories


const button = document.getElementById('buttonSet');
const list = document.getElementById('listSet');
const reteteIcon = document.getElementById('reteteIcon');

button.addEventListener('click', () => {
    reteteIcon.classList.toggle('rotate-180');

    if (list.classList.contains('hidden')) {
        list.classList.remove('hidden');

        setTimeout(() => {
            list.classList.add('opacity-100');
            list.classList.add('scale-100');
            list.classList.add('translate-y-0');
            list.classList.remove('opacity-0');
            list.classList.remove('scale-95');
            list.classList.remove('-translate-y-10');
        }, 10);
    } else {

        list.classList.remove('opacity-100');
        list.classList.remove('scale-100');
        list.classList.remove('translate-y-0');
        list.classList.add('opacity-0');
        list.classList.add('scale-95');
        list.classList.add('-translate-y-4');
        setTimeout(() => {
            list.classList.add('hidden');
        }, 300);
    }
});






document.addEventListener('click', (event) => {
    if (!buttonCategories.contains(event.target) && !listCategories.contains(event.target)) {
        reteteIcon.classList.remove('-rotate-90');
        listCategories.classList.remove('opacity-100');
        listCategories.classList.remove('scale-100');
        listCategories.classList.remove('translate-y-0');
        listCategories.classList.add('opacity-0');
        listCategories.classList.add('scale-95');
        listCategories.classList.add('-translate-y-4');
        setTimeout(() => {
            listCategories.classList.add('hidden');
        }, 300);
    }



    if (!button.contains(event.target) && !list.contains(event.target)) {
        reteteIcon.classList.remove('-rotate-90');
        list.classList.remove('opacity-100');
        list.classList.remove('scale-100');
        list.classList.remove('translate-y-0');
        list.classList.add('opacity-0');
        list.classList.add('scale-95');
        list.classList.add('-translate-y-4');
        setTimeout(() => {
            list.classList.add('hidden');
        }, 300);
    }
>>>>>>> parent of 4039069 (Product)
});
