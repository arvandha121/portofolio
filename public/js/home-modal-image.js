function openImageModal(src) {
    const modal = document.getElementById('imageModal');
    const image = document.getElementById('modalImage');
    image.src = src;
    modal.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
    modal.classList.add('opacity-100', 'scale-100');
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    const image = document.getElementById('modalImage');
    modal.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
    modal.classList.remove('opacity-100', 'scale-100');
    setTimeout(() => {
        image.src = '';
    }, 300); // biar smooth
}