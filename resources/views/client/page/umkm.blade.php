@extends('client.main')

@section('umkm')
    <main id="main">
        <div class="about">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('assets/images/UMKM.jpg') }}" width="100%">
                    <div class="desa">
                        <h1>UMKM DESA BUAHAN</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <p>My Team</p>
                    <h2>Expert Team Members</h2>
                </div>
                <div class="row">
                    @foreach ($umkm as $umkm)
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                        <hr class="m-0" style="border-bottom: 1px solid; border-top:0px;">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ Storage::url($umkm->image) }}" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $umkm->title }}</h2>
                                <p>
                                    {!! Str::limit($umkm->content, 50) !!}
                                </p>
                                <div class="team-social">
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
@endsection
