@extends('client.main')

@section('blog')
    <main>
        <section id="carousel-blog">
            <div class="content">
                <div class="container">
                    <h2 class="my-5 text-center" style="color: #fff">Blog Page</h2>
                    <div class="owl-carousel slide-one-item">

                        <div class="d-md-flex testimony-29101 align-items-stretch">
                            <div class="image" style="background-image: url({{ Storage::url($first->image) }});"></div>
                            <div class="text">
                                <blockquote>
                                    <h2><b>{{$first->title}}</b></h2>
                                    <p>&ldquo;{!! $first->content !!}&rdquo;
                                    </p>

                                    <div class="author">&mdash; Craig Stephen</div>
                                </blockquote>
                            </div>
                        </div> <!-- .item -->
                        @foreach ($hot as $hot)
                            <div class="d-md-flex testimony-29101 align-items-stretch">
                                <div class="image" style="background-image: url({{ Storage::url($hot->image) }});"></div>
                                <div class="text">
                                    <blockquote>
                                        <h2><b>{{$hot->title}}</b></h2>
                                        <p>&ldquo;{!! $hot->content !!}&rdquo;
                                        </p>

                                        <div class="author">&mdash; Craig Stephen</div>
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
                    @foreach ($blog as $bl)
                        <div class="col-md-4 mb-5 mt-3">
                            <div class="card box pt-0 wow fadeInUp" data-wow-delay="0.1s">
                                <img class="blog-img" src="{{ Storage::url($bl->image) }}" alt="Blog">
                                <div class="blog-text card-header">
                                    <a href="#">
                                        <h4 style="font-weight: bold; text-align: center;">{{ $bl->title }}</h4>
                                    </a>
                                    <div class="blog-meta card-block">
                                        <p><i class="far fa-user"></i>Admin</p>
                                        <p><i class="far fa-list-alt"></i>Web Design</p>
                                        <p><i
                                                class="far fa-calendar-alt"></i>{{ date('d M Y', $bl->created_at->timestamp) }}
                                        </p>
                                        <p><i class="far fa-comments"></i>5</p>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="container">
                                        {!! Str::limit($bl->content, 50) !!}
                                    </div>
                                </div>
                                <div class="card-footer d-md">
                                    <button class="btn-block btn-readmore btn-lg" href="">Read More</button>
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
