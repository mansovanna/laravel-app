document.addEventListener("DOMContentLoaded", () => {
    const buttonDefaultShorting = document.getElementById("button-default-shorting");
    const showDefaultShorting = document.getElementById("show-default-shorting");
    const reteteIcon = document.getElementById("reteteIcon");

    buttonDefaultShorting.addEventListener("click", () => {
        if (showDefaultShorting.classList.contains("hidden")) {
            // Show the dropdown
            showDefaultShorting.classList.remove("hidden");

            setTimeout(() => {
                showDefaultShorting.classList.add("opacity-1", "translate-y-0");
                showDefaultShorting.classList.remove("opacity-0", "translate-y-[-20px]");
            }, 10);

            // Rotate the icon
            reteteIcon.classList.add("rotate-180");

        }
    });


    function clostDefaultShorting (e){
        if(!buttonDefaultShorting.contains(e.target) && !showDefaultShorting.contains(e.target)){
             // Hide the dropdown
             showDefaultShorting.classList.remove("opacity-1", "translate-y-0");
             showDefaultShorting.classList.add("opacity-0", "translate-y-[-20px]");

             // Remove the dropdown after the animation
             setTimeout(() => {
                 showDefaultShorting.classList.add("hidden");
             }, 300);

             // Reset the icon rotation
             reteteIcon.classList.remove("rotate-180");
        }
    }
    document.addEventListener('click', (e)=>{
        clostDefaultShorting(e);
    });


});


