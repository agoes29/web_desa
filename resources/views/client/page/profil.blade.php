@extends('client.main')

@section('profil')
    <main>
        <section id="about" class="about">
            <div class="about-wrap container-fluid py-5">
                <div class="section-header text-center wow  pb-5" data-aos="zoom-in">
                    <h2><i class="bi bi-house-fill pe-2"></i>Profil Desa Buahan</h2>
                    <h4>Penggambaran Umum Desa</h4>
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
    </main>
@endsection
