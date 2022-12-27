@extends('client.main')

@section('penduduk1')
    <div class="coba22pi">
    </div>
    <svg id="visual" viewBox="0 0 900 200" width="100%" height="100%">
        <path d="M0 70L150 161L300 80L450 69L600 122L750 84L900 175L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 118L150 126L300 100L450 85L600 54L750 54L900 111L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 31L150 77L300 38L450 71L600 70L750 49L900 68L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
    </svg>
    <main>
        <section id="about-profil" class="about">
            <div class="about-wrap-profil container-fluid">
                <div class="section-header text-center wow  pb-2" data-aos="zoom-in">
                    <br><br><h2 class="fw-bold mt-1">KEPENDUDUKAN</h2>
                    <h4 class="h4Profile">Desa Buahan</h4>
                    <h4 class="h4Profile">Br. Buahan Utara</h4>
                </div>
                <div class="container mb-5 wow" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box demografi">
                            <div class="inner ps-3 pt-3">
                              <h3>831</h3>
                              <p>Totoal Penduduk</p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box penduduk">
                            <div class="inner ps-3 pt-3">
                              <h3>421</h3>
                              <p>Laki-Laki</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-male"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box program">
                            <div class="inner ps-3 pt-3">
                              <h3>421</h3>
                              <p>Perempuan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-female"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small card -->
                          <div class="small-box aset">
                            <div class="inner ps-3 pt-3">
                              <h3>279</h3>
                              <p>KK Terdaftar</p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                          </div>
                        </div>
                        <!-- ./col -->
                      </div>
                    </div>
                    <div class="section-header text-center wow  pb-3 mx-5" data-aos="zoom-in">
                        <br><br><h2 class="fw-bold mt-1">Grafik Perkembangan Penduduk</h2>
                        <h4 class="h4Profile">Br. Buahan Utara</h4>
                        <h4 class="h4Profile">Tahun 2022</h4>
                        <canvas id="myChart"></canvas>
                        {{-- <div class="dropdown mt-3">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Ganti Tahun
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">2022</a></li>
                              <li><a class="dropdown-item" href="#">2021</a></li>
                            </ul>
                        </div> --}}
                    </div>
            </div>
        </section>
        <svg id="visualprofil" viewBox="0 0 900 600" width="100%" height="50%">
            <path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg>
    </main>

{{-- Script Chart --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
            label: 'Total Penduduk',
            data: [831, 831, 831, 831, 831, 831, 831, 831, 831, 831, 831, 831],
            borderWidth: 3
            },
            {
            label: 'Laki-Laki',
            data: [421, 421, 421, 421, 421, 421, 421, 421, 421, 421, 421, 421],
            borderWidth: 3
            },
            {
            label: 'Perempuan',
            data: [421, 421, 421, 421, 421, 421, 421, 421, 421, 421, 421, 421],
            borderWidth: 3
            },]
        },
        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            hover: {
            mode: 'index',
            intersec: false
            }}
        }});
  </script>

@endsection
