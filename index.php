<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Our Store</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#home">
            <h1><span> OUR</span> PRODUCT <span> E</span>COMMERCE</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#product" data-after="Product">Product</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="#account" data-after="Account">Account</a></li>
            <li><a href="logout.php" data-after="Logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Home Section  -->
  <section id="home">
    <div class="home container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>Our Product Website <span></span></h1>
        <a href="#product" type="button" class="cta">EXPLORE NOW</a>
      </div>
    </div>
  </section>
  <!-- End home Section  -->

  <!-- product Section -->
  <section id="product">
    <div class="product container">
      <div class="product-top">
        <h1 class="section-title">Pro<span>du</span>ct</h1>
        <p>Semua yang kami sediakan disini yang terbaik dan kami hadirkan untuk kenyamanan dan gaya fashion anda</p>
      </div>
      <div class="product-bottom">
        <div class="product-item">
          <div class="icon"><img src="img/lv.jpg" /></div>
          <div class="service-item">
          <div class="icon"><img src="img/ck.jpg" /></div>
        </div>
        <div class="service-item">
          <div class="icon"><img src="img/guci.jpg" /></div>
        </div>
        <div class="service-item">
          <div class="icon"><img src="img/rotelli.jpg" /></div>
        </div>
        <div class="service-item">
          <div class="icon"><img src="img/model2.jpg" /></div>
        </div>
          <h2>Bag From Italy</h2>
          <p>Hari ini ada discount 50% di store kami. ayo segera datang!!!
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="about-header">
        <h1 class="section-title">A<span>bout</span></h1>
      </div>
      <div class="all-about">
        <div class="about-item">
          <div class="about-info">
            <h1>ABOUT US</h1>
            <h2>OUR STORE</h2>
            <p>OUR STORE berdiri sejak tahun 1999 dimana toko pertama kami berada di Tokyo dan sampai sekarang sudah berkembang menjadi banyak outlet dan cabang - cabang yang 
              tersebar di seluruh INDONESIA. Mengedepankan kualitas yang sangat baik menjadi motto kami untuk kesenangan hati customer
            </p>
          </div>
          <div class="about-img">
            <img src="img/logo.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about Section -->


  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 888 888 888</h2>
            <h2>+62 777 9899 0000</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>ourstore@gmail.com</h2>
            <h2>yourstoore@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Malalayang, Manado,Indonesia</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Team SECTION-->
  <section id="team">
    <div class="team container">
      <div>
        <h1 class="section-title">OUR<span>TIM</span></h1>
      </div>
      <div class="tim">
        <div>
          <img src="img/santa.jpeg" />
          <h1>Vrisanta Koloay</h1>
          <h2>20021106157</h2>
        </div>
        <div>
          <img src="img/shara.jpeg" />
          <h1>Shara Pantouw</h1>
          <h2>20021106154</h2>
        </div>
        <div>
          <img src="img/angel.JPG" />
          <h1>Angelita Sumera</h1>
          <h2>20021106105</h2>
        </div>
      </div>
    </div>
    <br> <br>
    <b style="font-size: 20px; margin-left: 480px">Link Video Demo Presentasi : </b>
    <a href="https://drive.google.com/file/d/113U7gOuPlFv6gcs-VGvtgpIdQp-nMbhM/view?usp=sharing" style="font-size: 20px;"><b>Klik Di Sini</b></a> <br><br>
  </section>
  <!-- End Team Section -->

  <!-- account -->
  <section id="account">
    <div class="account container">
      <div class="brand">
        <h1><span>OUR</span><span>STO</span>RE</h1>
      </div>
      <h2>BEST QUALITY FASHION IN TOWN</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/2x/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/2x/twitter-circled.png" /></a>
        </div>
      </div>
      <p>TIK2022E © 2022 ourstore. Pemograman Web</p>
    </div>
  </section>
  <!-- End account -->


  <script src="./app.js"></script>
</body>

</html>