
<section id="hero">
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

        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <!-- INI CONTOH CAROUSEL VIDEO DARI YOUTUBE-- oke kak-->
                <iframe width="1366" height="768" srca="https://www.youtube.com/embed/DdEd3YxU4Qk?controls=0&autoplay=1&mute=1&loop=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                <video class="img-fluid" autoplay loop muted>
                    {{-- <source src="assets/vid/1.mp4" type="video/mp4" /> --}}
                </video>
                <div class="carousel-container d-md-block">
                    <div class="container">
                        <div class="card w-50 w-md-100 mx-auto px-2 py-3 rad-10">
                            <h2 class="animate__animated animate__fadeInDown">First slide label</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Nulla vitae elit libero, a pharetra augue mollis interdum.
                            </p>
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="assets/vid/2.mp4" type="video/mp4" />
                </video>
                <div class="carousel-container d-md-block">
                    <div class="container">
                        <div class="card w-50 w-md-100 mx-auto px-2 py-3 rad-10">
                            <h2 class="animate__animated animate__fadeInDown">Second slide label</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="assets/vid/3.mp4" type="video/mp4" />
                </video>
                <div class="carousel-container d-md-block">
                    <div class="container">
                        <div class="card w-50 w-md-100 mx-auto px-2 py-3 rad-10">
                            <h2 class="animate__animated animate__fadeInDown">Third slide label</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
