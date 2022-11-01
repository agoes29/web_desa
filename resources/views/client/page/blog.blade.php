@extends('client.main')

@section('blog')
    <main>
        <section id="carousel-blog">
            <div class="content">
                <div class="container">
                    <h2 class="my-4 pt-5 pb-5 text-center" style="color: #fff">
                        <i class="bi bi-newspaper pe-2"></i>
                        HALAMAN BLOG</h2>
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="#007554" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>

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
                                        <button class="btn-block btn-readmore btn-lg">Read More</button>
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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L30,138.7C60,117,120,75,180,80C240,85,300,139,360,144C420,149,480,107,540,112C600,117,660,171,720,197.3C780,224,840,224,900,213.3C960,203,1020,181,1080,176C1140,171,1200,181,1260,186.7C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
@endsection
