<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/Asset 2.png">

    <title>Desa Buahan</title>

    <link rel="stylesheet" href="assets/style/style.css" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
    />
  </head>
  <body>
    <!-- =============Header============== -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="imageLogo" src="assets/images/Asset 2.png" alt="" />
            <h4>Desa Buahan</h4>
          </a>
          <button
            class="navbar-toggler navbar-color"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <i class="bi bi-list"></i>
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                Desa Buahan
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak Kami</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- ========== hero section=============== -->

    <section id="hero">
      <div
        id="heroCarousel"
        data-bs-interval="5000"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
      >
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- ---- Slide 1 ---- -->
          <div
            class="carousel-item active"
            style="background-image: url(assets/images/Group2.jpg)"
          >
            <div class="carousel-container">
              <div class="container">
                <h1 class="fw-bold" style="color: aliceblue">Selamat Datang</h1>
                <p class="fs-4">di Website Desa Buahan</p>
                <button class="fs-5">Lihat Selengkapnya</button>
              </div>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url(assets/images/photo.jpg)"
          >
            <div class="carousel-container">
              <div class="container">
                <h1 class="fw-bold" style="color: aliceblue">
                  Kunjungi Desa Penglipuran
                </h1>
                <p class="fs-4">Nikmati liburanmu bersama keluarga</p>
                <button class="fs-5">Lihat Selengkapnya</button>
              </div>
            </div>
          </div>
          <div
            class="carousel-item"
            style="background-image: url(assets/images/ph.jpg)"
          >
            <div class="carousel-container">
              <div class="container">
                <h1 class="fw-bold" style="color: aliceblue">
                  Kunjungi Desa Penglipuran
                </h1>
                <p class="fs-4">Nikmati liburanmu bersama keluarga</p>
                <button class="fs-5">Lihat Selengkapnya</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="about-wrap container-fluid py-5" id="about">
        <div class="container">
          <div class="row">
            <div class=" col-lg-5 col-md-6 order-1 order-md-2">
              <div class="gambar-about">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.072586875232!2d115.13022005800802!3d-8.497615863724253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b2bf99c0b95%3A0xc30e643bffae455e!2sBuahan%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1664631528155!5m2!1sid!2sid"
                  width="500"
                  height="350"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
              <!-- <img src="assets/images/photo.jpg" alt="" /> -->
            </div>
            <div class="text-about col-lg-7 col-md-6 order-2 order-md-1">
              <div class="text-about">
                <h1 class="fw-bold">Desa Buahan</h1>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                  aspernatur ab, ullam totam fuga repellendus veniam possimus
                  voluptates rem fugiat dolorum optio ratione est repellat cum
                  inventore explicabo illo at.
                </p>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Asperiores nemo laboriosam ab quisquam quas, impedit quaerat
                  quod nesciunt. Obcaecati possimus aliquam omnis iure,
                  perferendis natus voluptate commodi nisi itaque similique.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Tempore sint earum atque voluptate in doloremque repellendus?
                  Provident cupiditate modi, iusto atque odio excepturi ea,
                  rerum a laudantium vitae nam eos?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="bgimg">
      <div class="caption">
        <span class="border">
          <h2>Ayo Kunjungi Sekarang</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, beatae.</p>
        </span>
      </div>
    </div>
    <section>

      <div class="galeri-kecil-wrap container-fluid">
        <div class="container">
          <div class="row">
            <div class="text-galeri-k col-lg-5 col-md-5 text-white p-5">
              <h1>Nikmati Moment Anda Dengan Keluarga</h1>
            </div>
            <div class="col-lg-7 col-md-7 p-3">
              <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                  <div class="gallery">
                    <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/1.jpg" alt="" />
                    <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/2.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                  <div class="gallery">
                    <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/3.jpg" alt="" />
                    <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/4.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
    </section>
    <div class="langgan-wrap container-fluid text-center py-5">
      <div class="container">
        <div class="row">
          <div class="langgan col-12">
            <div class="langgan-text col-12">
              <h1 class="fw-bold">Berlanggan dengan Kami</h1>
              <p class="mt-2 mb-4">
                Dapatkan info dan berita terupdate dari kami
              </p>
              <input type="text" placeholder="Masukkan Email..." class="mb-4" />
              <br />
              <button>KIRIM</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-wrap container-fluid text-white p-3 text-center">
        <div class="footer">
          <p class="m-0">@copyright.yudira2021</p>
        </div>
      </div>
    </footer>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
          $("#beranda").addClass("sticky_header")
        } else {
          $("#beranda").removeClass("sticky_header")
        }
      })
    </script>
    <script>
      ;(function () {
        "use strict"
        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
          el = el.trim()
          if (all) {
            return [...document.querySelectorAll(el)]
          } else {
            return document.querySelector(el)
          }
        }

        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
          let selectEl = select(el, all)
          if (selectEl) {
            if (all) {
              selectEl.forEach((e) => e.addEventListener(type, listener))
            } else {
              selectEl.addEventListener(type, listener)
            }
          }
        }
        /**
         * Hero carousel indicators
         */
        let heroCarouselIndicators = select("#hero-carousel-indicators")
        let heroCarouselItems = select("#heroCarousel .carousel-item", true)

        heroCarouselItems.forEach((item, index) => {
          index === 0
            ? (heroCarouselIndicators.innerHTML +=
                "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                index +
                "' class='active'></li>")
            : (heroCarouselIndicators.innerHTML +=
                "<li data-bs-target='#heroCarousel' data-bs-slide-to='" +
                index +
                "'></li>")
        })
        /**
         * Easy on scroll event listener
         */
        const onscroll = (el, listener) => {
          el.addEventListener("scroll", listener)
        }

        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select("#header")
        if (selectHeader) {
          const headerScrolled = () => {
            if (window.scrollY > 100) {
              selectHeader.classList.add("header-scrolled")
            } else {
              selectHeader.classList.remove("header-scrolled")
            }
          }
          window.addEventListener("load", headerScrolled)
          onscroll(document, headerScrolled)
        }
      })()
    </script>
  </body>
</html>