@extends('client.main')

@section('profil')
    <div class="coba22pi">
    </div>
    <svg id="visual" viewBox="0 0 900 200" width="100%" height="100%">
        <path d="M0 70L150 161L300 80L450 69L600 122L750 84L900 175L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 118L150 126L300 100L450 85L600 54L750 54L900 111L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 31L150 77L300 38L450 71L600 70L750 49L900 68L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
    </svg>
    <main>
        <section id="about-profil" class="about">
            <div class="about-wrap-profil container-fluid">
                <div class="section-header text-center wow  pb-5" data-aos="zoom-in">
                    <h2 class="fw-bold">Profil Desa Buahan</h2>
                    <h4 class="h4Profile">Penggambaran Umum Desa</h4>
                </div>
                <div class="card profilMap">
                    <div class="container-about-profil" data-aos="fade-in" data-aos-duration="1500">
                        <div class="text-about-profil">
                            <h3 class="fw-bold"> Desa Buahan</h3>
                            <p>
                                Mengenai sejarah Desa Buahan tidak ada informasi yg menceritakan mulai adanya penduduk yg menghuni wilayah Desa Buahan secara pasti, karena tidak adanya peninggalan2 tertulis. Informasi sejarah yg ada berasal dari sesepuh Desa yg saat ini masih hidup. Informasi lain terkait dgn sejarah tentang Kebo Iwa.
                            </p>
                            <p>
                                Di dalam Babad Arya Tabanan diceritakan bahwa setelah terjadi musibah gugurnya Ki Patih Kebo Iwa di Jawa karena tipu muslihat dari Patih Gajah Mada pada Kerajaan Majapahit maka Bali merupakan kekuasaan Jawa di bawah Kerajaan Majapahit. Para Arya Kenceng menjadi Senopati Bala Yudha di Kerajaan Majapahit diberi kekuasaan memerintah di Wilayah Tabanan, Sira Ratu Arya Waringin diberikan kekuasaan di Gelgel, Sira Arya Sentong diberikan kekuasaan di Pacung dan Sira Arya Tan Wikan diberikan di Wilayah Kaba-kaba.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bgMap">
                    <div class="captionMap">
                        <span class="borderMap">
                            <h1>BATAS WILAYAH</h1>
                            <h4>Desa Buahan</h4>
                        </span>
                    </div>
                </div>
                <div class="card wilayah">
                    <div class="container-about-wilayah" data-aos="fade-in" data-aos-duration="1500">
                        <div class="text-about-wilayah">
                            {{-- <h3 class="fw-bold"> Desa Buahan</h3> --}}
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
        </section>
        <svg id="visualprofil" viewBox="0 0 900 600" width="100%" height="50%">
            <path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>
    </main>
@endsection
