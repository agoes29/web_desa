@extends('client.main')

@section('home')
    <main id="main">
        <section id="about" class="about">
            <div class="about-wrap container-fluid py-5" id="about">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-5 col-md-6 order-1 order-md-2">
                            <div class=" card gambar-about">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.072586875232!2d115.13022005800802!3d-8.497615863724253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b2bf99c0b95%3A0xc30e643bffae455e!2sBuahan%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1664631528155!5m2!1sid!2sid"
                                    width="500" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!-- <img src="assets/images/photo.jpg" alt="" /> -->
                        </div>
                        <div class="text-about col-lg-7 col-md-6 order-2 order-md-1">
                            <div class="text-about">
                                <h1 class="fw-bold"></h1>
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
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/1.jpg"
                                            alt="" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/2.jpg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="gallery">
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/3.jpg"
                                            alt="" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" src="assets/images/gallery/4.jpg"
                                            alt="" />
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
    </main>
@endsection
