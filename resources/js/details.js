

document.addEventListener('DOMContentLoaded', () => {
    const buttonDetailf = document.getElementById('buttonDetails');
    const overlay = document.getElementById('overlay');

    buttonDetailf.addEventListener('click', () => {
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');

        console.log("HELLO");
    });
});
