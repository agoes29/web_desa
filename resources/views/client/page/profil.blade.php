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
                    <br><br><h2 class="fw-bold mt-1">SEJARAH</h2>
                    <h4 class="h4Profile">Desa Buahan</h4>
                </div>
                <div class="card profilMap">
                    <div class="container-about-profil" data-aos="fade-in" data-aos-duration="1500">
                        <div style="text-align: center">
                            <iframe width="560px" height="315px" src="https://www.youtube.com/embed/aD44Lbw0fY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        {{-- <div class="bgMap">
                                <div class="captionMap">
                                    <span class="borderMap">
                                        <h1>SEJARAH</h1>
                                        <h4>Desa Buahan</h4>
                                    </span>
                                </div>
                            </div> --}}
                            <div class="text-about-profil mt-5" style="text-indent: 45px;">
                            <p data-aos="fade-in" data-aos-duration="1500">
                                Di dalam Babad Arya Tabanan diceritakan bahwa setelah terjadi musibah gugurnya Ki Patih Kebo Iwa di Jawa karena tipu muslihat dari Patih Gajah Mada pada Kerajaan Majapahit maka Bali merupakan kekuasaan Jawa di bawah Kerajaan Majapahit. Para Arya Kenceng menjadi Senopati Bala Yudha di Kerajaan Majapahit diberi kekuasaan memerintah di Wilayah Tabanan, Sira Ratu Arya Waringin diberikan kekuasaan di Gelgel, Sira Arya Sentong diberikan kekuasaan di Pacung dan Sira Arya Tan Wikan diberikan di Wilayah Kaba-kaba.
                            </p>
                            <p data-aos="fade-in" data-aos-duration="1500">
                                Pada saat pembagian Pemerintahan di Bali yang memegang kekuasaan adalah Sri Kresna Kepakisan yang berkedudukan di Srampangan. Mengenai Sejarah Desa Buahan dpat kami uraikan pada zaman itu dan sebelumnya tidak ada yang jelas tahu, dengan zaman itu diuraikan secara singkat yang diperintah oleh Sira Arya Kenceng yang merupakan murdaning Nayaka Jagat Tabanan yang Istana / Puri Beliau terletak di Desa Buahan (Pucangan) dengan jumlah rakyat pada saat memerintah sebanyak 10.000 orang dari berbagai warna (Catur kasta). Didalam Babad Tabanan diceritakan bahwa Puri Beliau bertempat di sebelah selatan Pura Bale Agung Desa Buahan (Kiduling Bale Agung) dan tamannya bertempat di sebelah tenggara Desa Buahan, wafatnya Beliau dibuatkan persemayaman untuk kebaktian dibuatkan  Batur yang sampai saat ini di buahan masih berupa Bangunan Pura Batur Pucangan. Selanjutnya dapat diceritakan bahwa Sira Sri Arya Kenceng sangat setia maka Sira Arya Kenceng diberikan kehormatan sebagai Mentri yang berkuasa memerintah Raja- Raja yang ada di Bali,dan diberikan anugrah apabila wafat diperkenankan dalam upacara Pengabenan ( Atiwa – tiwa) memakai bade Tumpang 11 ( sebelas). Pada saat Beliau Wafat dapat kami ceritakan lagi menurut isi dari Babad Tabanan dibuatkan pemujaan di sebelah Barat Pura Batur Pucangan, Yang juga sebagian besar penyungsungnya dari luar Daerah Desa Buahan yaitu seluruh Bali untuk mengingat  dan baktinya pada beliau dalam memangku sebagai Raja Tabanan yang memerintah Raja- Raja yang ada diseluruh Bali.
                            </p>
                            <p data-aos="fade-in" data-aos-duration="1500">
                                Dari tanggal 27 Agustus 1998 sampai dengan sekarang Desa Buahan berkantor di Banjar Buahan Tengah Desa Buahan,yang menjabat sebagai Kepala Desa pertama setelah pemekaran adalah I Gusti Agung Gde Suardana dari tanggal 27 Agustus 1988  sampai dengan 21 Oktober 1998, selanjutnya  yang menjabat Kepala Desa adalah I Gede Sugiartha dari tanggal 21 Oktober 1998 s/d 21 Oktober 2006  selanjutnya PJS adalah I Gede Sugiarta selama kurang lebih 6(enam ) bulan  dan sebagai perbekel Desa Buahan yang ketiga adalah I Gede Ngurah Parmita dari tanggal 26  April  2007 s/d 26 April 2013 dan sebagai perbekel yang keempat Desa Buahan adalah I Ketut Sukanada dari tanggal 08 Mei 2013 sampai dengan 08 mei 2019 dari 09 mei  2019 sampai dengan 23 Desember 2019 adalah Pj Perbekel Desa Buahan I Ketut Suarnata,S.Sos dan dari tanggal, 24 Desember 2019 sampai dengan sekarang adalah Perbekel Desa Buahan I Gede Ari Wastika,S.Pd.
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
