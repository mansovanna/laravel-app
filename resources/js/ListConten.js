document.addEventListener("DOMContentLoaded", () => {
    const listItems = document.getElementById("list-Items");
    const gridChildren = document.getElementsByClassName("grid-child");
    const descriptionProduct = document.getElementsByClassName("description-product");

    console.log("Grid Children:", gridChildren); // Check if elements are selected

    const shortList = document.getElementById("shortlist");
    const shortNoneList = document.getElementById("shortnonlist");

    // Handle click event for "Short By List"
    shortList.addEventListener("click", () => {
        localStorage.setItem("isShortList", "false");
        updateListItems();
    });

    // Handle click event for "Short None List"
    shortNoneList.addEventListener("click", () => {
        localStorage.setItem("isShortList", "true");
        updateListItems();
        console.log("Short List None" + " " + localStorage.getItem("isShortList"));
    });

    function updateListItems() {
        const isShortList = localStorage.getItem("isShortList");

        if (isShortList === null || isShortList === "false") {
            listItems.classList.remove("grid-rows-1");
            listItems.classList.add("grid-cols-3");

            Array.from(gridChildren).forEach((gridChild) => {
                console.log("Before:", gridChild.classList); // Log current classes

                gridChild.classList.remove("flex-row");
                gridChild.classList.add("flex-col");

                console.log("After:", gridChild.classList); // Log updated classes
            });

            // Display Description of Product
            Array.from(descriptionProduct).forEach((descProduct) => {
                console.log("Before:", descProduct.classList);

                descProduct.classList.remove("block");
                descProduct.classList.add("hidden");

                console.log("After:", descProduct.classList); // Log updated classes
            });

            shortList.classList.remove("bg-white");
            shortList.classList.add("bg-danger");

            shortList.classList.remove("text-secondary");
            shortList.classList.add("text-white");

            shortNoneList.classList.remove("bg-danger");
            shortNoneList.classList.add("bg-white");

            shortNoneList.classList.remove("text-white");
            shortNoneList.classList.add("text-secondary");
        } else {
            listItems.classList.remove("grid-cols-3");
            listItems.classList.add("grid-rows-1");

            console.log("Switching to list layout");

            Array.from(gridChildren).forEach((gridChild) => {
                gridChild.classList.remove("flex-col");
                gridChild.classList.add("flex-row");
            });

            // Display Description of Product
            Array.from(descriptionProduct).forEach((descProduct) => {
                console.log("Before:", descProduct.classList);

                descProduct.classList.remove("hidden");
                descProduct.classList.add("block");

                console.log("After:", descProduct.classList); // Log updated classes
            });

            shortList.classList.remove("bg-danger");
            shortList.classList.add("bg-white");

            shortList.classList.remove("text-white");
            shortList.classList.add("text-secondary");

            shortNoneList.classList.remove("bg-white");
            shortNoneList.classList.add("bg-danger");

            shortNoneList.classList.remove("text-secondary");
            shortNoneList.classList.add("text-white");
        }
    }

    // Initialize the list items display based on current localStorage value
    updateListItems();
});
