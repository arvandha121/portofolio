document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;
    const toggleBtn = document.getElementById("toggleDarkMode");
    const iconWrapper = document.getElementById("themeIconWrapper");
    const mainLogo = document.getElementById("mainLogo");

    const logoLight = mainLogo.dataset.light;
    const logoDark = mainLogo.dataset.dark;

    function renderIcon(mode) {
        if (mode === "dark-mode") {
            iconWrapper.innerHTML = '<i data-feather="sun" class="w-5 h-5"></i>';
        } else {
            iconWrapper.innerHTML = '<i data-feather="moon" class="w-5 h-5"></i>';
        }
        feather.replace(); // RENDER ULANG
    }

    function applyTheme(theme) {
        if (theme === "dark-mode") {
            body.classList.add("dark-mode");
            mainLogo.src = logoDark;
        } else {
            body.classList.remove("dark-mode");
            mainLogo.src = logoLight;
        }

        renderIcon(theme);
    }

    const saved = localStorage.getItem("theme") || "light";
    applyTheme(saved);

    toggleBtn.addEventListener("click", () => {
        const newTheme = body.classList.contains("dark-mode") ? "light" : "dark-mode";

        localStorage.setItem("theme", newTheme);
        applyTheme(newTheme);
    });
});
