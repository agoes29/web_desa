<section>
    <div class="owl-carousel owl-1" id="gambar-slider">
        @foreach ( $slider as $sl)
            <div><img src="{{ Storage::url($sl->image) }}" alt="Image" class="img-fluid"></div>
        @endforeach
    </div>
</section>
