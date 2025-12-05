document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;
    const toggleBtn = document.getElementById("toggleDarkMode");
    const icon = document.getElementById("themeIcon");

    // Load saved theme
    if (localStorage.getItem("theme") === "dark-mode") {
        body.classList.add("dark-mode");
        icon.setAttribute("data-feather", "sun");
    } else {
        body.classList.remove("dark-mode");
        icon.setAttribute("data-feather", "moon");
    }
    feather.replace();

    toggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");

        if (body.classList.contains("dark-mode")) {
            localStorage.setItem("theme", "dark-mode");
            icon.setAttribute("data-feather", "sun");
        } else {
            localStorage.setItem("theme", "light");
            icon.setAttribute("data-feather", "moon");
        }

        feather.replace(); // update icon setelah ganti
    });
});
