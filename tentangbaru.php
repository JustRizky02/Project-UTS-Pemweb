<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Construction Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"><img src="images/logo perisai.jpg"></a>

    <nav class="navbar">
        <a href="index.php">Beranda</a>
    </nav>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="" class="login-form">
        <h3>login form</h3>
        <input type="email" placeholder="enter your email" class="box">
        <input type="password" placeholder="enter your password" class="box">
        <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
        </div>
        <a href="ample-admin\dashboard.php" class="btn">Login Now</a>
        <p>don't have an account <a href="#">create one!</a></p>
    </form>

</header>

<div class="contact-info">

    <div id="close-contact-info" class="fas fa-times"></div>

    <div class="info">
        <i class="fas fa-phone"></i>
        <h3>Nomor Handphone</h3>
        <p>+6285624998873</p>
        <p>+6287722647344</p>
    </div>

    <div class="info">
        <i class="fas fa-envelope"></i>
        <h3>Alamat Email</h3>
        <p>perisai.generalkontraktor@gmail.com</p>
    </div>

    <div class="info">
        <i class="fas fa-map-marker-alt"></i>
        <h3>office address</h3>
        <p>Kota Bandung, Provinsi Jawa Barat, Indonesia</p>
    </div>

    <div class="share">
        <a href="https://instagram.com/perisaigc?igshid=MzRlODBiNWFlZA==" class="fab fa-instagram"></a>
        <a href="https://api.whatsapp.com/send?phone=6285624998873" class="fab fa-whatsapp"></a>

    </div>

</div>

<section class="about" id="about">

    <h1 class="heading"> Tentang Perisai General Contractor </h1>

    <div class="row">

        <div class="video">
            <video src="images/vid.mp4" loop muted autoplay></video>
        </div>

        <div class="content">
            <h3>Kami akan memberikan Anda karya terbaik yang Anda impikan!</h3>
            <p>Kami adalah penyedia jasa pelaksanaan pembangunan yang berdedikasi untuk membantu Anda mewujudkan proyek pembangunan impian Anda. Dengan pengalaman dan keahlian kami yang luas, kami siap mengelola setiap tahap konstruksi proyek Anda dengan profesionalisme dan keunggulan.<p>
            <p>Kami memahami betapa pentingnya proyek pembangunan bagi Anda, baik itu pembangunan bangunan perumahan, komersial, infrastruktur, atau proyek industri. Oleh karena itu, kami berkomitmen untuk memberikan solusi yang sesuai dengan kebutuhan dan harapan Anda.</p>
        </div>

    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

    lightGallery(document.querySelector('.projects .box-container'));

</script>

</body>
</html>