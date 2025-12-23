
const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});


const passwordInput = document.querySelector('.register input[name="password"]');
const bar = document.getElementById('strength-bar');
const text = document.getElementById('strength-text');

passwordInput.addEventListener('input', () => {
    const val = passwordInput.value;
    let strength = 0;

    if (val.length >= 8) strength++;
    if (/[A-Z]/.test(val)) strength++;
    if (/[0-9]/.test(val)) strength++;
    if (/[^A-Za-z0-9]/.test(val)) strength++;

    if (strength <= 1) {
        bar.style.width = "25%";
        bar.style.background = "red";
        text.textContent = "Weak";
    } else if (strength === 2) {
        bar.style.width = "50%";
        bar.style.background = "orange";
        text.textContent = "Medium";
    } else if (strength === 3) {
        bar.style.width = "75%";
        bar.style.background = "#EDA800";
        text.textContent = "Strong";
    } else {
        bar.style.width = "100%";
        bar.style.background = "#2ecc71";
        text.textContent = "Very Strong";
    }
});


const registerForm = document.getElementById("registerForm");
const notify = document.getElementById("notify");

registerForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(registerForm);

    try {
        const res = await fetch("register.php", {
            method: "POST",
            body: formData
        });

        const data = await res.json();

        notify.textContent = data.msg;
        notify.className = data.status; 
        notify.style.display = "block";

        if (data.status === "success") {
            registerForm.reset();
            bar.style.width = "0";
            text.textContent = "";
        }

        setTimeout(() => {
            notify.style.display = "none";
        }, 4000);

    } catch (err) {
        notify.textContent = "Server error. Try again.";
        notify.className = "error";
        notify.style.display = "block";
    }
});
