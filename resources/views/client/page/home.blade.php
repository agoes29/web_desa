@extends('client.main')

@section('home')
    <main id="main">
        <section id="about" class="about">
            <div class="about-wrap container-fluid py-5">
                <div class="section-header text-center wow  pb-5" data-aos="zoom-in">
                    <h2><i class="bi bi-house-fill pe-2"></i>TENTANG DESA</h2>
                    <h4>Sejarah Desa Buahan</h4>
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
                        <div class="text-about col-lg-7 col-md-6 order-2 order-md-1" data-aos="fade-in" data-aos-duration="1500">
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
                    <h1> <i class="bi bi-newspaper pe-3"></i>BLOG DESA</h1>
                    <h4>Artikel Terbaru</h4>
                </span>
            </div>
        </div>
        {{-- Blog --}}
        <section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f1f1f1" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <div class="blog" id="blog">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000">
                    @foreach ($blog as $bl)
                    <div class="col-md-4 mb-5 mt-3">
                        <div class="card box pt-0 wow">
                            <img class="blog-img" src="{{ Storage::url($bl->image) }}" alt="Blog">
                            <div class="blog-text card-header">
                                <a href="{{ route('blogshow.show', $bl->id) }}">
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
                                <a id="hover-blog" class="btn btn-block btn-lg" href="{{ route('blogshow.show', $bl->id) }}">
                                    <span class="text">Selengkapnya</span>
                                    <span>>>></span>
                                </a>
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
            <div id="tag-nav" class="section-header text-center wow zoomIn pb-1" data-aos="zoom-in">
                <h2><i class="bi bi-images pe-2"></i>GALERI DESA</h2>
                <p>Galeri Terbaru</p>
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
        <div id="surat">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f1f1f1" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
        </div>
        <div class="langgan-wrap container-fluid text-center py-5">
            <div class="container">
                <div class="row">
                    <div class="langgan col-12">
                        <div class="langgan-text col-12">
                            <h1 class="fw-bold">SURAT DESA</h1>
                            <p class="mt-2 mb-4">
                                Dapatkan Kebutuhan Surat Menyurat Tanpa Perlu Ke Kantor Desa
                            </p>
                            <input type="text" id="btn-kirim-bawah" placeholder="Masukkan NIK" class="mb-4" />
                            <!-- Button trigger modal --> <br>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Pilih Jenis Surat
                            </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                            <a href="" type="button" class="btn btn-primary mb-1">Surat Kematian</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
