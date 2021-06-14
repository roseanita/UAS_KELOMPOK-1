function daftar() {
    let nama = document.getElementById("nama").value;
    let email = document.getElementById("email-d").value;
    let kata_sandi = document.getElementById("kata_sandi-d").value;

    let validateNama = document.getElementById("validateNama");
    let validateEmail = document.getElementById("validateEmail_d");
    let validateKS = document.getElementById("validateKS_d");

    isValid = true;

    // Verif Email
    const v_email = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email == "" && kata_sandi == "") {
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
        alert("Behasil daftar, silahkan klik ok untuk melanjutkan");
        location.reload();

        isValid = false;
    }
}

function validationForm_d() {
    let nama = document.getElementById("nama").value;
    let email = document.getElementById("email-d").value;
    let kata_sandi = document.getElementById("kata_sandi-d").value;

    let validateNama = document.getElementById("validateNama");
    let validateEmail = document.getElementById("validateEmail_d");
    let validateKS = document.getElementById("validateKS_d");

    isValid = true;

    // Nama
    if (nama == "") {
        validateNama.innerHTML = "Nama tidak boleh kosong"
        validateNama.classList.add("invalid");
        validateNama.classList.remove("valid");

        isValid = false;
    } else {
        validateNama.innerHTML = "Nama sudah benar"
        validateNama.classList.add("valid");
        validateNama.classList.remove("invalid");
    }

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
        validateEmail.innerHTML = "Email sudah benar"
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
        validateKS.innerHTML = "Kata sandi sudah benar"
        validateKS.classList.add("valid");
        validateKS.classList.remove("invalid");
    }
}