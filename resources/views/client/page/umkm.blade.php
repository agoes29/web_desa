@extends('client.main')

@section('umkm')
    <main id="main">
        <div class="about">
            <div>
                <div class="col-sm-12">
                    <img src="{{ asset('assets/images/UMKM.jpg') }}" width="100%">
                    <div class="desa p-5">
                        <h1>
                            <i class="bi bi-shop me-2"></i></i>
                            UMKM DESA BUAHAN</h1>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f1f1f1" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <div class="umkm" id="umkm">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <h2><i class="bi bi-shop me-2"></i>
                        UMKM DESA</h2>
                    <p>UMKM Desa Buahan</p>
                </div>
                <div class="row">
                    @foreach ($umkm as $umkm)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                        <hr class="m-0" style="border-bottom: 1px solid; border-top:0px;">
                        <div class="umkm-item">
                            <div class="umkm-img">
                                <img src="{{ Storage::url($umkm->image) }}" alt="Image">
                            </div>
                            <div class="umkm-text">
                                <h2>{{ $umkm->title }}</h2>
                                <p>
                                    {!! Str::limit($umkm->content, 50) !!}
                                </p>
                                <div class="umkm-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href="{{ $umkm->link }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
@endsection
