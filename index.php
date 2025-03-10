<?php
include "database.php";


if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $pesan = $_POST['message'];

  $sql = "INSERT INTO db_contact (name, email, pesan) VALUES ('$username','$email','$pesan')";

  if ($conn->query($sql)) {
      echo "Berhasil";
  } else {
      echo "gagal";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Portofolio | Absari Bekti Syahfitri</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">ABSARI<span> BEKTI</span></a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#about">About Me</a></li>
        <li class="link"><a href="#service">skills</a></li>
        <li class="link"><a href="#resume">Portofolio</a></li>
        <li class="link"><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <header class="header" id="home">
      <div class="section__container header__container">
        <h4>Hello, I'm Absari Bekti</h4>
        <h1>UI/UX & Creative Designer</h1>
        <p class="section__description">
          Hai! Nama saya Absari Bekti Syahfitri. Saya seorang desainer grafis, 
          yang memiliki passion besar dalam desain.
          Di web ini, Anda dapat menemukan informasi tentang saya, proyek yang telah saya kerjakan, 
          serta tulisan dan pemikiran pribadi saya. Jangan ragu untuk menjelajahi dan mengenal saya lebih dekat!
        </p>
        <div class="header__btns">
          <button class="btn btn__primary" id="download-cv">Download V</button>
          <button class="btn btn__secondary">Read More</button>
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="assets/client.jpeg" alt="about" />
      </div>
      <div class="about__content">
        <h4>Yuk, Kenalan Sama Aku!</h4>
        <p class="section__description">
          Perkenalkan saya Absari Bekti Syahfitri, Saya Berasal Dari SMK Telkom Purwokerto, Dan Saya mengambil jurusan 
          Pengembangan Perangkat Lunak dan Gim.
          <span>Saya menghidupkan ide-ide di dunia digital.</span> Karya yang merupakan gabungan antara desain yang berpusat 
          pada pengguna dan inovasi estetika, yang menciptakan interaksi yang menarik dan berkesan.
        </p>
        <p class="section__description">
        </p>
        <div class="about__progress">
          <h5>UX Design</h5>
          <div class="about__progressbar" data-progress="95"><span></span></div>
          <h5>Visual Storytelling</h5>
          <div class="about__progressbar" data-progress="45"><span></span></div>
          <h5>Prototyping</h5>
          <div class="about__progressbar" data-progress="80"><span></span></div>
          <h5>Adobe Mastery</h5>
          <div class="about__progressbar" data-progress="70"><span></span></div>
        </div>
      </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <h2 class="section__header">Apa Yang Saya Lakukan?</h2>
        <p class="section__description">
          Saya suka mengerjakan proyek terkait desain, dan selalu bersemangat untuk belajar hal baru.
          Saat ini, saya sedang fokus pada proyek atau skill tertentu, misalnya: pengembangan Website.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <span><i class="ri-mac-line"></i></span>
            <div>
              <h4>UX/UI Design Consultation</h4>
              <p>
                Bikin tampilan yang menarik dan gampang dipakai, fokus ke detail
                 biar pengguna betah jelajah lama-lama.
              </p>
            </div>
          </div>
          <div class="service__card">
            <span><i class="ri-palette-line"></i></span>
            <div>
              <h4>Desain Grafis</h4>
              <p>
                Ngerjain visual yang keren, mulai dari logo sampai ilustrasi,
               buat ningkatin branding dan pesan.
              </p>
            </div>
          </div>
          <div class="service__card">
            <span><i class="ri-html5-fill"></i></span>
            <div>
              <h4>HTML</h4>
              <p>
                Nyusun struktur web yang rapi, bersih, dan mudah dipahami,
                 biar website lancar dan terorganisir.
              </p>
            </div>
          </div>
          <div class="service__card">
            <span><i class="ri-css3-fill"></i></span>
            <div>
              <h4>CSS</h4>
              <p>
                Ngestyling website dengan efek-efek kece, biar tampilannya modern,
                 responsif, dan nyaman di semua perangkat.

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

      </p>
      <div class="resume__tabs">
        <div class="resume__tablist">
          <button class="btn active" data-tab="1">Education</button>
          <button class="btn" data-tab="2">Portofolio</button>
        </div>
        <div class="resume__tabpanel">
          <div class="panel__grid active" data-panel="1">
            <div class="panel__card">
              <span><img src="assets/SD 1 Sokawera.jpeg" alt="">></i></span>
              <p class="section__description">SD Negeri 1 Sokawera</p>
              <p class="section__description">
               
              </p>
            </div>
            <div class="panel__card">
              <span><img src="assets/SMP Telkom purwokerto.webp" alt="">></i></span>
              <h4>SMP Telkom Purwokerto</h4>
              
              </p>
            </div>
            <div class="panel__card">
              <span><img src="assets/SMK Telkom Purwokerto.jpeg" alt="">></i></span>
              <h4>SMK Telkom Purwokerto</h4>
              
              </p>
            </div>
          </div>
          <div class="panel__grid" data-panel="2">
            <div class="panel__card">
              <span><img src="assets/Tangkapan Layar 2025-03-06 pukul 13.36.56.png" alt=""></span>
              <h4>Ini Adalah Projek Portofolio Saya</h4>
            
              </p>
            </div>
            <div class="panel__card">
              <span><img src="assets/WhatsApp Image 2025-03-06 at 13.34.34.jpeg" alt=""></span>
              <h4>Ini Adalah Projek Portofolio Saya</h4>
              
              </p>
            </div>
            <div class="panel__card">
              <span><img src="assets/WhatsApp Image 2025-03-06 at 13.34.35.jpeg" alt=""></span>
              <h4>Ini Adalah Projek Portofolio Saya</h4>
             
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <h2 class="section__header">Contact Saya</h2>
        <p class="section__description">
        
        </p>
        <div class="footer__grid">
          <div class="footer__content">
            <h4></h4>
            <p>
              Email: syahfitriabsaribekti@gmail.com
          Telepon: (056) 212403
          Alamat: Jalan Sokawera, RT.4/RW.2, Sokawera, Somagede,
           KAB. BANYUMAS, SOMAGEDE, JAWA TENGAH

            </p>
            <p>
              Mari kita tingkatkan Desain dan memulai 
              perjalanan kreatif baru bersama-sama.
            </p>
            <p>Thank you for visiting!</p>
            <div class="footer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
          </div>
          <div class="footer__form">
            <form action="/" method="post">
              <div class="input__row">
                <input name="name" type="text" placeholder="Your Name" />
                <input name="email" type="text" placeholder="Your Email" />
              </div>
              <textarea name="message" placeholder="Your Message"></textarea>
              <button name="submit" class="btn btn__primary">Send Message</button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Absari Bekti. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>