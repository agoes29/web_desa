@extends('client.main')

@section('home')
    <main id="main">
        <section id="about" class="about">
            <div>
                <hr>
            </div>
            <div class="about-wrap container-fluid py-5" id="about">
                <div class="section-header text-center wow  pb-5" data-aos="zoom-in">
                    <p>Tentang Desa</p>
                    <h2>Sejarah Desa Buahan</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-5 col-md-6 order-1 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                            <div class="card gambar-about">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.072586875232!2d115.13022005800802!3d-8.497615863724253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b2bf99c0b95%3A0xc30e643bffae455e!2sBuahan%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1664631528155!5m2!1sid!2sid"
                                    width="500" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="text-about col-lg-7 col-md-6 order-2 order-md-1" data-aos="fade-in" data-aos-duration="1500" data-aos-offset="300">
                            <div class="text-about">
                                <h1 class="fw-bold"> Desa Buahan</h1>
                                <p>
                                    Mengenai sejarah Desa Buahan tidak ada informasi yg menceritakan mulai adanya penduduk yg menghuni wilayah Desa Buahan secara pasti, karena tidak adanya peninggalan2 tertulis. Informasi sejarah yg ada berasal dari sesepuh Desa yg saat ini masih hidup. Informasi lain terkait dgn sejarah tentang Kebo Iwa.
                                </p>
                                <p>
                                    Di dalam Babad Arya Tabanan diceritakan bahwa setelah terjadi musibah gugurnya Ki Patih Kebo Iwa di Jawa karena tipu muslihat dari Patih Gajah Mada pada Kerajaan Majapahit maka Bali merupakan kekuasaan Jawa di bawah Kerajaan Majapahit. Para Arya Kenceng menjadi Senopati Bala Yudha di Kerajaan Majapahit diberi kekuasaan memerintah di Wilayah Tabanan, Sira Ratu Arya Waringin diberikan kekuasaan di Gelgel, Sira Arya Sentong diberikan kekuasaan di Pacung dan Sira Arya Tan Wikan diberikan di Wilayah Kaba-kaba.
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
        {{-- Blog --}}
        <section>
        <div id="artikel">
            <hr>
        </div>
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn pb-5" data-aos="zoom-in">
                    <p>Blog Desa</p>
                    <h2>Artikel Terbaru</h2>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300">
                    @foreach ($blog as $bl)
                    <div class="col-md-4 mb-5 mt-3">
                        <div class="card box pt-0 wow">
                            <img class="blog-img" src="{{ Storage::url($bl->image) }}" alt="Blog">
                            <div class="blog-text card-header">
                                <a href="#">
                                    <h5 style="font-weight: bold; text-align: center;">{{ $bl->title }}</h5>
                                </a>
                                <div class="blog-meta card-block">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>{{date('d M Y', $bl->created_at->timestamp)}}</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="container">
                                    <p>{!! Str::limit($bl->content, 50) !!}</p>
                                </div>
                            </div>
                            <div class="card-footer d-md">
                                <button id="hover-blog" class="btn-block btn-lg" href="">
                                    <span class="text">Selengkapnya</span>
                                    <span>>>></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </section>

        <section>
        <div id="galery">
            <hr>
        </div>
            <div class="section-header text-center wow zoomIn pb-1" data-aos="zoom-in">
                <p>Galeri Desa</p>
                <h2>Galeri Terbaru</h2>
            </div>
            <div class="galeri-kecil-wrap container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="text-galeri-k col-lg-5 col-md-5 text-white p-5" data-aos="fade-right" data-aos-duration="1000">
                            <h1>Nikmati Moment Anda Dengan Keluarga</h1>
                        </div>
                        <div class="col-lg-7 col-md-7 p-3">
                            <div class="row" id="galeri-beranda">
                                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0"> 
                                    <div class="gallery galeri-home">
                                        <img class="w-100 shadow-1-strong rounded mb-4" data-aos="fade-up" data-aos-duration="1000" src="assets/images/gallery/1.jpg"
                                            alt="" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" src="assets/images/gallery/2.jpg"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="gallery galeri-home">
                                        <img class="w-100 shadow-1-strong rounded mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" src="assets/images/gallery/3.jpg"
                                            alt="" />
                                        <img class="w-100 shadow-1-strong rounded mb-4" data-aos="fade-up" data-aos-duration="1000" src="assets/images/gallery/4.jpg"
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
                            <button id="btn-kirim-bawah" >KIRIM</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
