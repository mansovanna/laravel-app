document.addEventListener("DOMContentLoaded", function () {
    const passwordField = document.getElementById("password");
    const confirmPasswordField = document.getElementById("confirm-password");

    const passShow = document.getElementById("passShow");
    const passHide = document.getElementById("passHide");

    const confirmShow = document.getElementById("confirmShow");
    const confirmHide = document.getElementById("confirmHide");

    // Toggle password visibility
    document
        .getElementById("toggle-password")
        .addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passShow.classList.remove("hidden");
                passHide.classList.add("hidden");
            } else {
                passwordField.type = "password";
                passShow.classList.add("hidden");
                passHide.classList.remove("hidden");
            }
        });

    // Toggle confirm password visibility
    document
        .getElementById("toggle-confirm-password")
        .addEventListener("click", function () {
            if (confirmPasswordField.type === "password") {
                confirmPasswordField.type = "text";
                confirmShow.classList.remove("hidden");
                confirmHide.classList.add("hidden");
            } else {
                confirmPasswordField.type = "password";
                confirmShow.classList.add("hidden");
                confirmHide.classList.remove("hidden");
            }
        });
});
