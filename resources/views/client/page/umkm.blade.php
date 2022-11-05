@extends('client.main')

@section('umkm')
    <main id="main">
        <div class="about">
            <div>
                <div class="col-sm-12">
                    {{-- <div id="imgPadang">
                        <i class="bi bi-shop me-2"></i></i>
                            UMKM DESA BUAHAN</h1>
                    </div> --}}
                    <img src="{{ asset('assets/images/UMKM.jpg') }}" width="100%">
                    <div class="desa p-5">
                        <h1>
                            <i class="bi bi-shop me-2"></i></i>
                            UMKM DESA BUAHAN</h1>
                    </div>
                </div>
            </div>
        </div>
        <svg id="visual" viewBox="0 0 960 540" width="100%" height="100%">
            <path d="M0 152L160 66L320 103L480 95L640 65L800 129L960 65L960 0L800 0L640 0L480 0L320 0L160 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 82L160 48L320 121L480 76L640 64L800 116L960 65L960 0L800 0L640 0L480 0L320 0L160 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 63L160 45L320 58L480 52L640 55L800 62L960 30L960 0L800 0L640 0L480 0L320 0L160 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>
        <div class="umkm" id="umkm">
            <div class="container umkmHead">
                <div class="section-header text-center wow" data-aos="fade-in" data-aos-duration="1000">
                    <h2><i class="bi bi-shop me-2"></i>
                        UMKM DESA</h2>
                    <p>UMKM Desa Buahan</p>
                </div>
                <div class="row">
                    @foreach ($umkm as $umkm)
                    <div class="col-lg-6 wow" data-aos="fade-up" data-aos-duration="1000">
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
    <svg id="visual1" viewBox="0 0 900 600" width="100%" height="100%">
        <rect x="0" y="0" width="100%" height="100%" fill="#ffffff"></rect><path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
    </svg>
@endsection
