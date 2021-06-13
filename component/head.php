<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>

<?php if (scandir("../pemesanan")) { ?>
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="../../assets/css/responsive.css">
<link rel="stylesheet" href="../../assets/css/base.css">
<link rel="stylesheet" href="../../assets/css/button.css">

<!-- ICON -->
<link rel="shortcut icon" href="../../assets/img/icon/MobiRent.ico" type="image/x-icon">

<?php } else { ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/button.css">

<!-- ICON -->
<link rel="shortcut icon" href="assets/img/icon/MobiRent.ico" type="image/x-icon">
<?php } ?>

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&display=swap" rel="stylesheet">