@extends('client.main')

@section('surat')
    <div class="coba22pi">
    </div>
    <svg id="visual" viewBox="0 0 900 200" width="100%" height="100%">
        <path d="M0 70L150 161L300 80L450 69L600 122L750 84L900 175L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#d5dedc" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 118L150 126L300 100L450 85L600 54L750 54L900 111L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#76aa9a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 31L150 77L300 38L450 71L600 70L750 49L900 68L900 0L750 0L600 0L450 0L300 0L150 0L0 0Z" fill="#007554" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
    </svg>
    <main>
        <section id="about-profil" class="about">
            <div class="about-wrap-profil container-fluid">
                <div class="section-header text-center wow  pb-2" data-aos="zoom-in">
                    <br><br><h2 class="fw-bold mt-1">PENGISIAN DATA</h2>
                    <h4 class="h4Profile">SURAT KEMATIAN</h4>
                </div>
                <div class="card-body px-5">
                    <form action="{{ route('suratcontroller.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Orang Meninggal</label>
                        <input type="text" class="form-control" id="" name="nama" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempatl" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatl" name="tempatl" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggall" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggall" name="tanggall" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="br" class="form-label">Banjar</label>
                        <input type="text" class="form-control" id="br" name="br" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="tglm" class="form-label">Tanggal Kematian</label>
                        <input type="text" class="form-control" id="tglm" name="tglm" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempatm" class="form-label">Tempat Kematian</label>
                        <input type="text" class="form-control" id="tempatm" name="tempatm" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="penyebabm" class="form-label">Penyebab Kematian</label>
                        <input type="text" class="form-control" id="penyebabm" name="penyebabm" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-md btn-primary px-4">Kirim Data</button>
                    <a href="/" class=" btn btn-md btn-secondary px-4">Batal</a>
                    </form>
                </div>
            </div>
        </section>
        {{-- <svg id="visualprofil" viewBox="0 0 900 600" width="100%" height="50%">
            <path d="M0 495L225 512L450 455L675 487L900 502L900 601L675 601L450 601L225 601L0 601Z" fill="#708f84" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 537L225 476L450 489L675 536L900 499L900 601L675 601L450 601L225 601L0 601Z" fill="#42575a" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path><path d="M0 541L225 548L450 512L675 518L900 528L900 601L675 601L450 601L225 601L0 601Z" fill="#1f2529" style="transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0s;"></path>
        </svg> --}}
    </main>
@endsection
