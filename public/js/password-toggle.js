document.addEventListener("DOMContentLoaded", () => {
    // pastikan feather sudah siap
    if (!window.feather || !feather.icons) {
        console.warn("Feather icons belum siap.");
        return;
    }

    const passwordInput = document.getElementById("password");
    const toggleBtn = document.getElementById("togglePassword");
    const iconWrap = document.getElementById("passwordIconWrap");

    // Render icon awal
    iconWrap.innerHTML = feather.icons["eye"].toSvg({ width: 18, height: 18 });

    toggleBtn.addEventListener("click", () => {
        const isHidden = passwordInput.type === "password";

        // toggle tipe input
        passwordInput.type = isHidden ? "text" : "password";

        // set aria
        toggleBtn.setAttribute("aria-pressed", isHidden ? "true" : "false");

        // ganti ikon
        iconWrap.innerHTML = isHidden
            ? feather.icons["eye-off"].toSvg({ width: 18, height: 18 })
            : feather.icons["eye"].toSvg({ width: 18, height: 18 });
    });
});
