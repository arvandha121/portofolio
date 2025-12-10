let duration = 300;
const timerText = document.getElementById("timer");
const resendBtn = document.getElementById("resendBtn");

const countdown = setInterval(() => {
    duration--;
    timerText.textContent = duration;

    if (duration <= 0) {
        clearInterval(countdown);
        resendBtn.disabled = false;
        resendBtn.textContent = "Kirim ulang kode";
    }
}, 1000);
