@extends('client.main')

@section('umkm')
    <main id="main">
        <div class="about">
            <div class="green"></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 foto-awag">
                    <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
                    <div class="desa">
                        <h1>Desa Buahan</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsum perferendis consectetur nisi quod nihil dolorem enim tempora eveniet fugiat.</p>
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


{{--  --}}
    <div class="about">
        <div class="green"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 foto-awag">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
                <div class="desa">
                    <h1>Desa Buahan</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque ipsum perferendis consectetur nisi quod nihil dolorem enim tempora eveniet fugiat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="umkm text-center my-4 p-5">
        <h1>UMKM Desa Buahan</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        <div class="d-grid gap-2 col-12 mx-auto">
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
            <a href=""><button class="btn btn-success btn-lg " type="button"><i class="fa-solid fa-users me-2"></i> Stt. Jenggala Gora Yowana</button></a>
          </div>
    </div>
    <div class="service bg-success p-5 text-light">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <img src="{{ asset('assets/images/img.jpg') }}" width="100%">
            </div>
            <div class="col-sm-12 col-md-6 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, voluptatem? adipisicing elit. Error fuga iusto nemo dignissimos nihil tenetur, architecto id accusantium voluptate repellendus! Quibusdam, placeat nam? Placeat sapiente nostrum quis praesentium rem eum?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi est mollitia sit ad odit fugiat porro nihil eligendi molestias dignissimos modi, velit explicabo iste repellendus laboriosam, corporis totam nam officiis!</p>
            </div>
        </div>
      </div>
    </div>
    </main>
@endsection
