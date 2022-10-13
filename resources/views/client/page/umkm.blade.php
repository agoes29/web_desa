@extends('client.main')

@section('umkm')
    <main id="main">
        <section id="umkm">
            <div class="container mt-5" style="background-color: #ff0000">
                <div class="card border-0 rad-25 shadow-none">
                    <div class="card-body mx-md-3 my-md-3">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="about-img"><img src="{{ asset('assets/client/img/features-2.png') }}"
                                        alt="" class="img-fluid px-md-0 py-md-0 px-3 py-5"></div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="about-content">
                                @csrf
                                @forelse ($blog as $bl)
                                {!! $bl->content !!}
                                <img src="{{ Storage::url($bl->image) }}" alt="" class="img-fluid">
                                @empty
                                    <tr>
                                        <td colspan="3">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
