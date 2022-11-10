@extends('client.main')

@section('blog')
    <main id="blog-main">
        <div id="mobile" style="background-color: #007554;" ></div>
        <svg id="visual" viewBox="0 0 900 600" width="100%" height="100%">
            <path d="M0 70L150 161L300 80L450 69L600 122L750 84L900 175L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 118L150 126L300 100L450 85L600 54L750 54L900 111L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 31L150 77L300 38L450 71L600 70L750 49L900 68L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>
        <div class="section post-section pt-5 blogMain-show ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8"  id="artikel-blog" >
                        <h2 class="heading text-center pb-5">{{ $blog->title }}</h2>
                        <div class="text-center">
                            <img src="{{ Storage::url($blog->image) }}" alt="Image" class="img-fluid mb-4 image-artikel-blog" data-aos="fade-in" data-aos-duration="1000">
                            <span class="date d-block text-center small text-uppercase text-black-50 mt-3 mb-5">
                                <i class="far fa-calendar-alt"></i>
                                {{ date('d M Y', $blog->created_at->timestamp) }}</span>
                        </div>
                        <div>
                            {!! $blog->content !!}
                        </div>
                        <div class="row mt-5 mb-5 pt-3 border-top">
                            <div class="col-12">
                            <ul class="social col-md-4 list-unstyled d-flex">
                                <span class="fw-bold text-black small mb-1">Share</span>
                                <li class="ms-3" data-aos="fade-up" data-aos-duration="500"><a href="#"></a>
                                    <!-- <img class="social-media" src="assets/images/instagram.svg" alt=""> -->
                                    <i class="bi bi-instagram"></i>
                                </li>
                                <!-- link youtube -->
                                <li class="ms-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"><a href="#"></a>
                                    <!-- <img class="social-media" src="assets/images/youtube.svg" alt=""> -->
                                    <i class="bi bi-youtube"></i>
                                </li>
                                <!-- link facebook -->
                                <li class="ms-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400"><a href="#"></a>
                                    <!-- <img class="social-media" src="assets/images/facebook.svg" alt=""> -->
                                    <i class="bi bi-facebook"></i>
                                </li>
                                <!-- link tiktok -->
                                <li class="ms-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600"><a href="#"></a>
                                    <!-- <img class="social-media" src="assets/images/tiktok.svg" alt=""> -->
                                    <i class="bi bi-tiktok"></i>
                                </li>
                                <!-- link twitter -->
                                <li class="ms-3" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"><a href="#"></a>
                                    <!-- <img class="social-media" src="assets/images/twitter.svg" alt=""> -->
                                    <i class="bi bi-twitter"></i>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="heading my-5"> <i class="bi bi-newspaper"></i>
                          Artikel Lainnya</h2>
                    </div>
                </div>
                <div  class="row justify-content-center">
                    @foreach ( $all as $all )
                    <div id="artikel-lain" class="col-lg-12">
                        <div class="post-entry d-md-flex small-horizontal mb-5" data-aos="fade-right" data-aos-duration="1000">
                            <div class="me-md-5 thumbnail mb-3 mb-md-0">
                                <img src="{{ Storage::url($all->image) }}" alt="Image" class="img rounded" height="225px" width="325px">
                            </div>
                            <div class="content">
                                <h3 class="heading"><a href="{{ route('blogshow.show', $all->id) }}">{{ $all->title }}</a></h3>
                                <div>{!! Str::limit($all->content, 225) !!}</div>
                                <div href="#" class="post-author d-flex align-items-center">
                                    <div class="text icon-blog">
                                        <i class="bi bi-person-fill"></i>
                                        <strong>Admin Desa Buahan</strong>
                                        <span>
                                            <i class="bi bi-calendar3 ms-3 m-1"></i>
                                            {{ date('d M Y', $all->created_at->timestamp) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                {{-- {{ $blog->links() }} Masih Eror Gatau Knapa --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg id="visual1" viewBox="0 0 900 600" width="100%" height="50%">
            <path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>
    </main>
@endsection
