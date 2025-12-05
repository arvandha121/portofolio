let cropper, selectedFile;

const input = document.getElementById("gambar");
const modal = document.getElementById("cropModal");
const cropImage = document.getElementById("cropImage");
const preview = document.getElementById("preview");
const ratioSelect = document.getElementById("ratioSelect");
input.addEventListener("change", (e) => {
    selectedFile = e.target.files[0];
    if (!selectedFile) return;
    const url = URL.createObjectURL(selectedFile);
    cropImage.src = url;
    openModal();
    setTimeout(() => {
        initCropper(1); // default 1:1
    }, 200);
});
function openModal() {
    modal.classList.remove("hidden");
}
function closeModal() {
    modal.classList.add("hidden");
    if (cropper) cropper.destroy();
}
function initCropper(ratio) {
    if (cropper) cropper.destroy();
    cropper = new Cropper(cropImage, {
        aspectRatio: ratio,
        viewMode: 1,
        autoCropArea: 1,
        responsive: true,
        movable: true,
        zoomable: true,
    });
}
ratioSelect.addEventListener("change", () => {
    const val = parseFloat(ratioSelect.value);
    initCropper(isNaN(val) ? NaN : val);
});
document.getElementById("applyCrop").addEventListener("click", () => {
    cropper.getCroppedCanvas().toBlob((blob) => {
        const croppedFile = new File([blob], "cropped.jpg", {
            type: "image/jpeg",
            lastModified: Date.now(),
        });
        const dt = new DataTransfer();
        dt.items.add(croppedFile);
        input.files = dt.files;
        // show preview
        preview.src = URL.createObjectURL(croppedFile);
        preview.classList.remove("hidden");
        closeModal();
    }, "image/jpeg", 0.9);
});