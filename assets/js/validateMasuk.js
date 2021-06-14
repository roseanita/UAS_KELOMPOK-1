alert("INFO MASUK! \nSelamat Datang di MobiRent \n\n\nEmail: mobirent@support.com \nSandi: 12345678 ");

function masuk() {
    let email = document.getElementById("email").value;
    let kata_sandi = document.getElementById("kata_sandi").value;

    let validateEmail = document.getElementById("validateEmail");
    let validateKS = document.getElementById("validateKS");

    isValid = true;

    // Verif Email
    const v_email = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email == "mobirent@support.com" && kata_sandi == "12345678") {
        alert("Behasil masuk, silahkan klik ok untuk melanjutkan");
        window.location = "../page/pengguna/index.php";

        isValid = false;
    } else if (email == "" && kata_sandi == "") {
        alert("Gagal masuk, data tidak boleh kosong");

        isValid = false;
    } else if (!(v_email.test(email))) {
        validateEmail.innerHTML = 'Format email salah ex: (johndoe@gmail.com)'
        validateEmail.classList.add("invalid");
        validateEmail.classList.remove("valid");

        isValid = false;
    } else if (kata_sandi.length <= 6) {
        validateKS.innerHTML = 'Kata sandi minimal 6 karakter'
        validateKS.classList.add("invalid");
        validateKS.classList.remove("valid");

        isValid = false;
    } else {
        alert("Gagal masuk, data tidak sesuai");
        location.reload();

        isValid = false;
    }
}

function validationForm() {
    let email = document.getElementById("email").value;
    let kata_sandi = document.getElementById("kata_sandi").value;

    let validateEmail = document.getElementById("validateEmail");
    let validateKS = document.getElementById("validateKS");

    isValid = true;

    // Email
    const v_email = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email == "") {
        validateEmail.innerHTML = "Email tidak boleh kosong"
        validateEmail.classList.add("invalid");
        validateEmail.classList.remove("valid");

        isValid = false;
    } else if (!(v_email.test(email))) {
        validateEmail.innerHTML = 'Format email salah, ex: (johndoe@gmail.com)'
        validateEmail.classList.add("invalid");
        validateEmail.classList.remove("valid");

        isValid = false;
    } else {
        validateEmail.innerHTML = "Email yang anda masukkan sudah benar"
        validateEmail.classList.add("valid");
        validateEmail.classList.remove("invalid");
    }

    // Kata Sandi
    if (kata_sandi == "") {
        validateKS.innerHTML = "Kata sandi tidak boleh kosong"
        validateKS.classList.add("invalid");
        validateKS.classList.remove("valid");

        isValid = false;
    } else if (kata_sandi.length <= 6) {
        validateKS.innerHTML = 'Kata sandi minimal 6 karakter'
        validateKS.classList.add("invalid");
        validateKS.classList.remove("valid");

        isValid = false;
    } else {
        validateKS.innerHTML = "Kata sandi yang anda masukkan sudah benar"
        validateKS.classList.add("valid");
        validateKS.classList.remove("invalid");
    }
}