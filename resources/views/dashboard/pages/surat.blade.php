@extends('dashboard.main')
@section('surat')
<section>
    <div class="card px-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>PERMINTAAN SURAT</h5>
                </div>
            </div>
        </div>
    </div>
    @csrf
    <div class="container-fluid">
        <div class="m-2">

                @forelse ($smm as $smm)
                <tr>
                    <td>{{ $smm->id }}</td>
                    <td>{{ $smm->nama }}</td>
                    <td>Surat Kematian</td>
                    <a class="btn" href="{{ route('suratcontroller.show', $smm->id) }}">
                        <span class="text">Download</span>
                    </a>
                </tr>
                <br>
                @empty
                <tr>
                    <td colspan="3">Tidak Ada Data</td>
                </tr>
                @endforelse

        </div>
    </div>
</section>
@endsection
