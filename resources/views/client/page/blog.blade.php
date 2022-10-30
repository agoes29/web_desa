@extends('client.main')

@section('blog')
    <main>
        <section id="carousel-blog">
            <div class="content">
                <div class="container">
                    <h4 class="my-4 pt-5 text-center" style="color: #fff">BLOG PAGE</h4>
                    <div class="owl-carousel slide-one-item">
                        <div class="d-md-flex testimony-29101 align-items-stretch">
                            <div class="image" style="background-image: url({{ Storage::url($first->image) }});"></div>
                            <div class="text">
                                <h2><b>{{$first->title}}</b></h2>
                                <blockquote>
                                    &ldquo;{!! Str::limit($first->content, 100) !!}&rdquo;
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
                                    <h2><b>{{$hot->title}}</b></h2>
                                    <blockquote>
                                        {!! Str::limit($hot->content, 100) !!}
                                        <a href="">Selengkapnya >></a>
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

        <!-- START COBA COBA -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Blog Desa</p>
                    <h2>Artikel Terbaru</h2>
                </div>
                <div class="row">
                    @foreach ($blog as $bls)
                        <div class="col-md-4 mb-3 mt-3 pt-3">
                            <div class="card box pt-0 wow fadeInUp" data-wow-delay="0.1s">
                                <img class="blog-img" src="{{ Storage::url($bls->image) }}" alt="Blog">
                                <div class="blog-text card-header mt-2">
                                    <a href="#">
                                        <h4 style="font-weight: bold; text-align: center;">{{ $bls->title }}</h4>
                                    </a>
                                </div>
                                <div class="card-body py-0">
                                    <div class="container">
                                        {!! Str::limit($bls->content, 50) !!}
                                    </div>
                                    <div class="blog-meta card-block">
                                        <p><i
                                            class="far fa-calendar-alt"></i>{{ date('d M Y', $bls->created_at->timestamp) }}
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
@endsection
