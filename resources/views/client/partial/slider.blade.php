<section id="desktop">
    <div class="owl-carousel owl-1" id="gambar-slider">
        @foreach ( $slider as $sl)
            <div><img src="{{ Storage::url($sl->image) }}" alt="Image" class="img-fluid"></div>
        @endforeach
    </div>
</section>

<section id="mobile" style="background-color: #008264">
    <div class="content">
        <div class="container tilte-carouselBlog">
            <div class="owl-carousel slide-one-item">
                @foreach ($slider as $hot)
                    <div class="d-md-flex testimony-29101 align-items-stretch">
                        <div class="image" style="background-image: url({{ Storage::url($hot->image) }});"></div>
                        {{-- <div class="text">
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
                        </div> --}}
                    </div> <!-- .item -->
                @endforeach


            </div>
        </div>
    </div>
</section>
