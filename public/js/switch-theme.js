let theme_status = document.getElementById("theme-switch");
let hide_checkbox = document.getElementById("hide-checkbox");
let dark_style = document.getElementsByClassName('star-5');
window.onload = function () {
    // Get the theme value from session storage
    let sessionval = sessionStorage.getItem("theme");

    // If switchTheme exists in session storage, set the input switch accordingly
    if (sessionval !== null) {
        hide_checkbox.checked = sessionval === "true";
        // Apply the theme according to the value retrieved from session storage
        if (hide_checkbox.checked) {
            theme_status.setAttribute(
                "href",
                "/css/lightTheme.css"
            );
        } else {
            theme_status.setAttribute(
                "href",
                "/css/darkTheme.css"
            );
        }
    }
};

function switchThemeMethod() {
    let switchTheme = hide_checkbox.checked;
    theme_status.setAttribute(
        "href",
        switchTheme
            ? "/css/lightTheme.css"
            : "/css/darkTheme.css"
    );
    sessionStorage.setItem("theme", switchTheme);
}
