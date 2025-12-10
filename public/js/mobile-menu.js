document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openMobileMenu");
    const closeBtn = document.getElementById("closeMobileMenu");
    const menu = document.getElementById("mobileMenu");

    openBtn.addEventListener("click", () => {
        menu.style.transform = "translateY(0)";
        feather.replace(); // pastikan icon rapi setelah menu muncul
    });

    closeBtn.addEventListener("click", () => {
        menu.style.transform = "translateY(100%)";
    });
});
