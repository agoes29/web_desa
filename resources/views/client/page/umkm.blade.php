@extends('client.main')

@section('umkm')
    <main id="main">
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-50 text-center">
                                <h2>Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="umkm" class="blog_area section-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                        @csrf
                        @forelse ($data as $bl)
                        <div class="blog_left_sidebar card m-3">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img src="{{ Storage::url($bl->image) }}" alt="" class="img-fluid card-img rounded-2">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">{!! $bl->title !!}</h2>
                                    </a>
                                    <p>{!! $bl->content !!}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        @empty
                            <tr>
                                <td colspan="3">Tidak Ada Data</td>
                            </tr>
                        @endforelse
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">

                        <div class="about-img"><img src="{{ asset('assets/client/img/features-2.png') }}"
                                alt="" class="img-fluid px-md-0 py-md-0 px-3 py-5"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
