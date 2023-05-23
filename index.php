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

  <a href="#" class="logo"><img src="images/logo perisai.jpg"></a>

  <nav class="navbar">
    <a href="#home">Beranda</a>
    <a href="#about">Tentang</a>
    <a href="#services">Pelayanan</a>
    <a href="#projects">Project</a>
    <a href="#contact">Konsultasi</a>
    <a href="#blogs">Informasi</a>
  </nav>

  <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <div id="info-btn" class="fas fa-info-circle"></div>
    <div id="search-btn" class="fas fa-search"></div>
    <div id="login-btn" class="fas fa-user"></div>
  </div>

  <form action="" class="search-form">
    <input type="search" name="" placeholder="Cari disini..." id="search-box">
    <label for="search-box" class="fas fa-search"></label>
  </form>

  <form action="" class="login-form">
    <h3>Login Form</h3>
    <input type="email" placeholder="Masukan Email" class="box">
    <input type="password" placeholder="Masukan Password" class="box">
    <div class="flex">
      <input type="checkbox" name="" id="remember-me">
      <label for="remember-me">Remember me</label>
      <a href="#">Lupa password?</a>
    </div>
    <a href="#" class="btn">Login Pengguna</a>
      <a href="ample-admin\dashboard.php" class="btn">Login Admin</a>
    <p>Tidak punya akun? <a href="#">buat sekarang!</a></p>
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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

  <div class="swiper home-slider">

    <div class="swiper-wrapper">

      <section class="swiper-slide slide" style="background: url(images/rumah.png) no-repeat;">
        <div class="content">
          <h3>Tumbuh Bersama, Sahabat Mempermudah Bersama</h3>
          <p>Jasa Pelaksanaan Pembangunan. Pekerjaan Renovasi atau Pembangunan dari Nol. Bangunan Arsitektur, Interior, Mebel Furniture.</p>
          <a href="#about" class="btn">Selengkapnya</a>
        </div>
      </section>

      <section class="swiper-slide slide" style="background: url(images/swipe.png) no-repeat;">
        <div class="content">
          <h3>Membuat Mimpimu Menjadi Kenyataan</h3>
          <p>Jasa Pelaksanaan Pembangunan. Pekerjaan Renovasi atau Pembangunan dari Nol. Bangunan Arsitektur, Interior, Mebel Furniture.</p>
          <a href="#about" class="btn">Selengkapnya</a>
        </div>
      </section>

      <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
        <div class="content">
          <h3>Ubah Konsepmu Menjadi Sebuah Kreasi</h3>
          <p>Jasa Pelaksanaan Pembangunan. Pekerjaan Renovasi atau Pembangunan dari Nol. Bangunan Arsitektur, Interior, Mebel Furniture.</p>
          <a href="#about" class="btn">Selengkapnya</a>
        </div>
      </section>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

  <h1 class="heading"> Tentang Perisai General Contractor </h1>

  <div class="row">

    <div class="video">
      <video src="images/vid.mp4" loop muted autoplay></video>
    </div>

    <div class="content">
      <h3>Kami akan memberikan Anda karya terbaik yang Anda impikan!</h3>
      <p>Kami adalah penyedia jasa pelaksanaan pembangunan yang berdedikasi untuk membantu Anda mewujudkan proyek pembangunan impian Anda. Dengan pengalaman dan keahlian kami yang luas, kami siap mengelola setiap tahap konstruksi proyek Anda dengan profesionalisme dan keunggulan.<p>

      <a href="tentangbaru.php" class="btn">Baca selengkapnya</a>
    </div>

  </div>

  <div class="box-container">

    <div class="box">
      <h3>10+</h3>
      <p>Pengalaman</p>
    </div>

    <div class="box">
      <h3>1500+</h3>
      <p>Projek Diselesaikan</p>
    </div>

    <div class="box">
      <h3>790+</h3>
      <p>Klien Puas</p>
    </div>

    <div class="box">
      <h3>450+</h3>
      <p>Pekerja Aktif</p>
    </div>

  </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

  <h1 class="heading"> Pelayanan Kami </h1>

  <div class="box-container">

    <div class="box">
      <img src="images/service-1.png" alt="">
      <h3>Konstruksi Bangunan</h3>
      <p>Kami menerapkan teknologi terbaru dan menggunakan bahan bangunan berkualitas untuk memastikan keandalan, keamanan, dan keberlanjutan bangunan yang kami konstruksi.</p>
    </div>

    <div class="box">
      <img src="images/service-2.png" alt="">
      <h3>Renovasi Rumah</h3>
      <p>Kami berkomitmen untuk memberikan layanan yang profesional, transparan, dan tepat waktu, sehingga memastikan kepuasan klien kami.</p>
    </div>

    <div class="box">
      <img src="images/service-3.png" alt="">
      <h3>Desain Arsitektur</h3>
      <p>Dengan pendekatan kolaboratif, kami bekerja sama dengan klien untuk memahami tujuan mereka, menciptakan konsep yang inovatif, dan menerjemahkan ide-ide menjadi desain yang nyata. </p>
    </div>

    <div class="box">
      <img src="images/service-4.png" alt="">
      <h3>Pasokan Material</h3>
      <p>Kami bekerja sama dengan produsen terpercaya untuk memastikan kualitas dan ketersediaan material yang konsisten.</p>
    </div>

    <div class="box">
      <img src="images/service-5.png" alt="">
      <h3>Konsultan Konstruksi</h3>
      <p>Kami bekerja sama dengan klien untuk memahami visi mereka, menawarkan solusi inovatif, dan membantu mengoptimalkan efisiensi proyek.</p>
    </div>

    <div class="box">
      <img src="images/service-6.png" alt="">
      <h3>Desain Interior</h3>
      <p>Kami menggabungkan keahlian dalam pemilihan furnitur, pencahayaan, warna, dan tekstur untuk menciptakan atmosfer yang unik dan memikat.</p>
    </div>

    <div class="box">
      <img src="images/service-7.png" alt="">
      <h3>Perawatan Gedung</h3>
      <p>Dengan tim profesional dan terlatih, kami menyediakan layanan perawatan yang komprehensif untuk menjaga keberlanjutan, keamanan, dan kenyamanan gedung Anda.</p>
    </div>

    <div class="box">
      <img src="images/service-8.png" alt="">
      <h3>Renovasi Bangunan</h3>
      <p>Dengan tim profesional dan berpengalaman, kami menyediakan layanan renovasi yang komprehensif mulai dari perencanaan hingga penyelesaian proyek.</p>
    </div>

  </div>

</section>

<!-- services section ends -->

<!-- projects section starts  -->

<section class="projects" id="projects">

  <h1 class="heading"> Project Kami </h1>

  <div class="box-container">

    <a href="images/rumah.jpg" class="box">
      <div class="image">
        <img src="images/rumah.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Rumah Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="images/ruangan.jpg" class="box">
      <div class="image">
        <img src="images/ruangan.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Ruangan Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="images/taman.jpg" class="box">
      <div class="image">
        <img src="images/taman.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Taman Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="images/kantor.jpg" class="box">
      <div class="image">
        <img src="images/kantor.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Kantor Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="images/dapur.jpg" class="box">
      <div class="image">
        <img src="images/dapur.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Dapur Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

    <a href="images/toilet.jpg" class="box">
      <div class="image">
        <img src="images/toilet.jpg" alt="">
      </div>
      <div class="content">
        <div class="info">
          <h3>Toilet Idaman</h3>
          <p>construction, design</p>
        </div>
        <i class="fas fa-plus"></i>
      </div>
    </a>

  </div>

</section>

<!-- projects section ends -->

<!-- reviews section starts  -->

<section class="reviews">

  <h1 class="heading"> Review klien </h1>

  <div class="swiper reviews-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <p>Subhanalloh..Alhamdulillah... dari awal konsultasi design dan pembiayaan renovasi bisa disesuaikan dengan keinginan dan tentunya budget yg sesuai dengan kami. Pengerjaan awal sampai dengan finishing sesuai dengan plan, service exelent, tukang dan laden juga bekerja dengan baik. Apabila ada kendala atau sesuatu yang kurang setelah selesai pengerjaan, ada garansi lho dan tetap dilayani baik. Terima Kasih @perisai_studio 👏</p>
        <div class="user">
          <img src="images/yadi.jpg" alt="">
          <div class="info">
            <h3>Yadi Supriyadi</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>Desain ini menggabungkan elemen-elemen modern dan inovatif dengan kebutuhan praktis yang diperlukan dalam lingkungan kerja.</p>
        <div class="user">
          <img src="images/profil.png" alt="">
          <div class="info">
            <h3>Desi Anggraini</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>Setiap elemen dalam desain ini dipilih dengan cermat, mulai dari pemilihan warna yang cerah dan harmonis hingga penggunaan furnitur yang elegan dan fungsional.</p>
        <div class="user">
          <img src="images/profil.png" alt="">
          <div class="info">
            <h3>Thalita Zharifa</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>Pemilihan material yang berkualitas dan pencahayaan yang baik memberikan sentuhan elegan dan modern pada desain dapur.</p>
        <div class="user">
          <img src="images/profil.png" alt="">
          <div class="info">
            <h3>Budi Santoso</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>Mempertimbangkan penggunaan ruang yang optimal, memastikan bahwa setiap area taman digunakan dengan baik.</p>
        <div class="user">
          <img src="images/siti.jpg" alt="">
          <div class="info">
            <h3>Siti Rahayu</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide slide">
        <p>Desain ini memperlihatkan perhatian yang jelas terhadap detail dan kebutuhan pengguna.</p>
        <div class="user">
          <img src="images/ahmad.jpg" alt="">
          <div class="info">
            <h3>Ahmad Rizki</h3>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- reviews section ends -->

<!-- pricing section starts  -->

<!--<section class="pricing" id="pricing">

  <h1 class="heading"> our pricing </h1>

  <div class="box-container">

    <div class="box">
      <i class="fas fa-home"></i>
      <h3>basic plan</h3>
      <div class="price"><span>$</span>250<span>/mo</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>maintenance</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

    <div class="box">
      <i class="fas fa-building"></i>
      <h3>premium plan</h3>
      <div class="price"><span>$</span>650<span>/mo</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>maintenance</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

    <div class="box">
      <i class="fas fa-city"></i>
      <h3>ultimate plan</h3>
      <div class="price"><span>$</span>1250<span>/mo</span></div>
      <div class="list">
        <p>interior design</p>
        <p>refurbishment</p>
        <p>material supply</p>
        <p>maintenance</p>
        <p>24/7 support</p>
      </div>
      <a href="#" class="btn">choose plan</a>
    </div>

  </div>

</section>

 pricing section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

  <h1 class="heading"> Konsultasi Project </h1>

  <div class="row">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.875152029932!2d107.60453301073659!3d-6.905529667553195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e647aeb77f91%3A0x58d7ebe1240aa6bc!2sJl.%20Wastukencana%20Gg.%20Nangkasuni%20No.1%2C%20Tamansari%2C%20Kec.%20Bandung%20Wetan%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040116!5e0!3m2!1sen!2sid!4v1684781134540!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form class="form" method="post" action="inputuser.php">
      <h3>Hubungi Kami</h3>
      <input type="text" placeholder="Nama" class="box" name="nama" required>
      <input type="email" placeholder="Email" class="box" name="email" required>
      <input type="tel" placeholder="No.Telp" class="box" name="telp" required>
      <textarea name="pesan" placeholder="Pesan" class="box" cols="30" rows="10" required></textarea>
      <input type="submit" value="Kirim Pesan" class="btn">
    </form>

  </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

  <h1 class="heading"> Informasi Menarik </h1>

  <div class="swiper blogs-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/pagar.jpg" alt="">
        </div>
        <div class="content">
          <h3>Ide Desain Pagar untuk Rumah Minimalismu</h3>
          <p>Bagian dari rumah yang pertama kali akan dilihat oleh banyak orang ada pada bagian luar rumah yaitu pagar. Selain berfungsi sebagai keamanan untuk rumah dan jadi pembatas area rumah, pagar juga bisa menjadi dekorasi eksterior yang mempercantik tampilan rumahmu. Terdapat banyak pilihan jenis dan model pagar yang bisa kalian terapkan.</p>
          <a href="https://www.instagram.com/p/CpZxYKUL8fq/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/kanopi.jpg" alt="">
        </div>
        <div class="content">
          <h3>Jenis Kanopi Rumah yang Wajib Kamu Tahu!</h3>
          <p>Kanopi rumah menjadi hal yang dibutuhkan pada beberapa rumah untuk melindungi area rumah dari paparan sinar matahari dan hujan. Selain menjadi barang yang fungsional, kanopi bisa menambah nilai estetika pada tampilan rumah. Terdapat beberapa jenis kanopi rumah yang bisa kalian dengan terapkan pada rumahmu menyesuaikan fungsi, selera, dan kondisi area rumahmu.</p>
          <a href="https://www.instagram.com/p/CpSDC4pOK0J/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/glass.jpg" alt="">
        </div>
        <div class="content">
          <h3>Kenalan Dengan Glass Block Yuk!</h3>
          <p>Glass Block merupakan blok kaca yang memiliki ukuran tebal dan tidak transparan yang menciptakan pencahayaan alami tanpa mengganggu privasimu. Dibanding dengan kaca transparan biasa yang berukuran tipis, Glass Block bisa menjadi alternatif dan terbilang lebih kuat dan awet untuk penggunaannya. Tertarik untuk memakai Glass Block di rumahmu?</p>
          <a href="https://www.instagram.com/p/CpcWRERL6v_/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/kolam.jpg" alt="">
        </div>
        <div class="content">
          <h3>Inspirasi Desain Kolam yang Bikin Rumahmu Makin Cantik</h3>
          <p>Kolam ikan pada halaman rumah akan menambah nilai estetika dan membuat tampilan halaman rumah menjadi lebih luas, sejuk, dan terlihat mewah. Pengalaman bersantai di halaman rumah menjadi lebih menyenangkan ditemani ikan-ikan yang berenang cantik pada kolam.</p>
          <a href="https://www.instagram.com/p/CpPeL6XugXb/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/lembab.jpg" alt="">
        </div>
        <div class="content">
          <h3>Rumah Lembab?Say no more!</h3>
          <p>Pasti nggak mau kan rumah kalian lembab dan jadi sarang jamur? Tembok jadi kotor dan nggak menarik untuk dilihat. Selalu minder kalau ada tamu yang ingin berkunjung. Jangan biarkan rumahmu menjadi lembab dan jadi sarang jamur. Lakukan beberapa tips dari kami untuk mengatasi dan mencegah rumah jadi lembab.</p>
          <a href="https://www.instagram.com/p/CpUn24VuZEN/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

      <div class="swiper-slide slide">
        <div class="image">
          <img src="images/courtyard.jpg" alt="">
        </div>
        <div class="content">
          <h3>Apa Itu Inner Courtyard?</h3>
          <p>Ciptakan kenyamanan dengan menggabungkan alam dan arsitektur pada Inner Courtyard. Tidak hanya menunjukan estetika, Inner Courtyard juga memiliki beberapa fungsi yang menarik untuk rumahmu. Kamu bisa menikmati keindahan alam dari dalam rumah sambil bersantai dengan keluarga.
          </p>
          <a href="https://www.instagram.com/p/Coo5Z3oLpWF/?utm_source=ig_web_copy_link&igshid=MmJiY2I4NDBkZg==" class="btn">Baca Selengkapnya</a>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- blogs section ends -->



<!-- footer section starts  -->

<section class="footer">

  <div class="links">
    <a class="btn" href="#home">Beranda</a>
    <a class="btn" href="#about">Tentang</a>
    <a class="btn" href="#services">Pelayanan</a>
    <a class="btn" href="#projects">Project</a>
    <a class="btn" href="#contact">Konsultasi</a>
    <a class="btn" href="#blogs">Informasi</a>
  </div>

  <div class="credit"> dibuat oleh <span>Mahasiswa ITENAS</span></div>

</section>

<!-- footer section ends -->









<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

  lightGallery(document.querySelector('.projects .box-container'));

</script>

</body>
</html>