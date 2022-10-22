@extends('client.main')

@section('blog')
<main>

    <section id="hero" >
        <!-- Carousel wrapper -->
        <div id="carouselVideoExample"  data-bs-interval="10000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselVideoExample" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Inner -->
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{ Storage::url($first->image) }}" alt="">
                    <div class="carousel-container d-md-block align-bottom">
                        <div class="container">
                            <div class="card w-50 w-md-100 mx-auto px-2 py-3 mt-5 rad-10">
                                <h4 class="animate__animated animate__fadeInDown wputih">{{ $first->title }}</h4>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">More</a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($hot as $hot)
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ Storage::url($hot->image) }}" alt="">
                    <div class="carousel-container d-md-block">
                        <div class="container">
                            <div class="card w-50 w-md-100 mx-auto px-2 py-3 my-5 rad-10">
                                <h4 class="animate__animated animate__fadeInDown wputih">{{ $hot->title }}</h4>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             <!-- <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:url({{url('assets/images/img.jpg')}})">
                    <div class="carousel-container d-md-block">
                        <div class="container">
                            <div class="card w-50 w-md-100 mx-auto px-2 py-3 my-5 rad-10">
                                <h4 class="animate__animated animate__fadeInDown wputih">Judul Blog 1</h4>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image:url({{url('assets/images/img.jpg')}})">
                    <div class="carousel-container d-md-block">
                        <div class="container">
                            <div class="card w-50 w-md-100 mx-auto px-2 py-3 my-5 rad-10">
                                <h4 class="animate__animated animate__fadeInDown wputih">Judul Blog 2</h4>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image:url({{url('assets/images/img.jpg')}})">
                    <div class="carousel-container d-md-block">
                        <div class="container">
                            <div class="card w-50 w-md-100 mx-auto px-2 py-3 my-5 rad-10">
                                <h4 class="animate__animated animate__fadeInDown wputih">Judul Blog 3</h4>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Inner -->

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideoExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselVideoExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </section>
    <!-- start Card blog -->
        <div class="container my-3">
            <div class="row align-items-center h-100">
                @foreach ($blog as $bl)
                <div class="col-sm-12 col-md-4 mb-3">
                    <div class="card card-default">
                     <div class="card-body">
                        <img class="village-img img-fluid rounded" src="{{ Storage::url($bl->image) }}" width="100%">
                        <h4 class="pt-2 pb-1">{{ $bl->title }}</h4>
                        <div class="d-flex justify-content-between">
                            <a href="" ><button class="btn btn-success">Read More</button></a>
                            <span class="pt-2">{{date('d M Y', $bl->created_at->timestamp)}}</span>
                        </div>
                     </div>
                    </div>
                 </div>
                @endforeach
            </div>
        </div>
        <!-- end Card blog -->

        <!-- START COBA COBA -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Articles</h2>
                </div>
                <div class="row">
                    @foreach ($blog as $bl)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 box pt-0 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="{{ Storage::url($bl->image) }}" alt="Blog">
                            <div class="blog-text card-header">
                                <a href="#">
                                    <h4 style="font-weight: bold; text-align: center;">{{ $bl->title }}</h4>
                                </a>
                                <div class="blog-meta card-block">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>{{date('d M Y', $bl->created_at->timestamp)}}</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    {!! Str::limit($bl->content, 50) !!}
                                </div>
                            </div>
                            <div class="card-footer d-md">
                                <button class="btn-block btn-readmore" href="">Read More</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END COBA COBA -->
</main>
@endsection
