@extends('client.main')

@section('blog')
    <main>
        <section id="carousel-blog">
            <div class="content">
                <div class="container tilte-carouselBlog">
                    <h3 class="my-4 pt-5 pb-5 text-center" style="color: #fff">
                        <i class="bi bi-newspaper pe-2"></i>
                        HALAMAN BLOG</h3>
                    <div class="owl-carousel slide-one-item">
                        <div class="d-md-flex testimony-29101 align-items-stretch">
                            <div class="image" style="background-image: url({{ Storage::url($first->image) }});"></div>
                            <div class="text">
                                <a href="{{ route('blogshow.show', $first->id) }}"><h2><b>{{$first->title}}</b></h2></a>
                                <blockquote>
                                    {!! Str::limit($first->content, 100) !!}
                                    <a href="{{ route('blogshow.show', $first->id) }}">Selengkapnya >></a>
                                    <div class="author"><p><i
                                        class="fa fa-calendar-alt p-3"></i>{{ date('d M Y', $first->created_at->timestamp) }}
                                </p></div>
                                </blockquote>
                            </div>
                        </div> <!-- .item -->
                        @foreach ($hot as $hot)
                            <div class="d-md-flex testimony-29101 align-items-stretch">
                                <div class="image" style="background-image: url({{ Storage::url($hot->image) }});"></div>
                                <div class="text">
                                    <a href="{{ route('blogshow.show', $hot->id) }}">
                                    <h2><b>{{$hot->title}}</b></h2>
                                    </a>
                                    <blockquote>
                                        {!! Str::limit($hot->content, 100) !!}
                                        <a href="{{ route('blogshow.show', $hot->id) }}">Selengkapnya >></a>
                                        <div class="author">
                                            <p><i
                                            class="fa fa-calendar-alt p-3"></i>{{ date('d M Y', $hot->created_at->timestamp) }}
                                            </p>
                                        </div>
                                    </blockquote>
                                </div>
                            </div> <!-- .item -->
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <svg id="visual" viewBox="0 0 900 180" width="100%" height="100%">
            <path d="M0 70L150 161L300 80L450 69L600 122L750 84L900 175L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 118L150 126L300 100L450 85L600 54L750 54L900 111L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 31L150 77L300 38L450 71L600 70L750 49L900 68L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>

        <!-- START COBA COBA -->
        <div class="blog" id="blog-coba-coba">
            <div class="container">
                <div class="section-header text-center" data-aos="fade-in" data-aos-duration="1000">
                    <h2>
                        <i class="bi bi-newspaper pe-1"></i>
                        BLOG DESA</h2>
                    <p>Artikel Terbaru</p>
                </div>
                <div class="row">
                    @foreach ($blog as $bls)
                        <div class="col-md-4 mb-3 mt-3 pt-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card box pt-0 wow">
                                <img class="blog-img" src="{{ Storage::url($bls->image) }}" alt="Blog">
                                <div class="blog-text card-header mt-2">
                                    <a href="{{ route('blogshow.show', $bls->id) }}">
                                        <h4 style="font-weight: bold; text-align: center;">{{ $bls->title }}</h4>
                                    </a>
                                </div>
                                <div class="card-body py-0">
                                    <div class="container">
                                        {!! Str::limit($bls->content, 50) !!}
                                    </div>
                                    <div class="blog-meta card-block ms-3">
                                        <p><i
                                            class="far fa-calendar-alt"></i>
                                            {{ date('d M Y', $bls->created_at->timestamp) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer d-md">
                                    <a href="{{ route('blogshow.show', $bls->id) }}">
                                        <button class="btn-block btn-readmore btn-lg">
                                            <span class="text">Selengkapnya</span>
                                            <span>>>></span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- END COBA COBA -->
    </main>
    <svg id="visual1" viewBox="0 0 900 600" width="100%" height="100%">
        <path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
    </svg>
@endsection
