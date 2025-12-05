const openBtn = document.getElementById('openMobileMenu');
    const closeBtn = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');

    openBtn.onclick = () => mobileMenu.classList.remove('translate-y-full');
    closeBtn.onclick = () => mobileMenu.classList.add('translate-y-full');

    feather.replace();