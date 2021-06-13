<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MobiRent - Masuk</title>

    <link rel="stylesheet" href="../assets/css/auth.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/button.css">

    <link rel="shortcut icon" href="../assets/img/icon/MobiRent.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="">
                <div class="judul">
                    <h1>Daftar MobiRent</h1>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-pesan k">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama anda">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-pesan k">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email anda">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-pesan k">
                            <label for="kata_sandi">Kata Sandi</label>
                            <input type="password" name="kata_sandi" class="form-control" id="kata_sandi" placeholder="Masukkan kata sandi anda">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mt-20">
                        <button type="submit" class="y rent-btn">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <form action="#">
                        <div class="logo">
                            <img src="../assets/img/logo/MobiRent.png" alt="">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-pesan">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email anda">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-pesan">
                                    <label for="kata_sandi">Kata Sandi</label>
                                    <input type="password" name="kata_sandi" class="form-control" id="kata_sandi" placeholder="Masukkan kata sandi anda">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mt-20">
                                <button type="submit" class="purple rent-btn">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang:) <br> Sudah Memiliki Akun?</h1>
                    <button id="signIn" type="submit" class="rent-btn ghost yellow" style="text-decoration: none;">Masuk Sekarang</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Belum Mempunyai Akun?</h1>
                    <button id="signUp" type="submit" class="rent-btn ghost" style="text-decoration: none;">Daftar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");

    signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
    });
</script>

</html>