@extends('dashboard.main')
@section('homeslide')
<div class="card px-2">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h5>IMAGE CAROUSEL</h5>
            </div>
            <div class="col-md-6 d-flex flex-row-reverse">
                <a href="/homeinput"><button class="btn btn-primary">Tambah Gambar Baru</button></a>
            </div>
        </div>
    </div>
    @csrf
    <table id="example2" class="table table-sm table-bordered table-hover dataTable dtr-inline table-responsive-md"
        aria-describedby="example2_info">
        <thead>
            <tr>
                <th rowspan="1" colspan="1">ID</th>
                <th rowspan="1" colspan="1">Image</th>
                <th rowspan="1" colspan="1">Update</th>
                <th rowspan="1" colspan="1">Delete</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($slide as $sl)
                <tr>
                    <td>{{ $sl->id }}</td>
                    <td style="word-break:break-all;">
                        <img src="{{ Storage::url($sl->image) }}" alt="" class="img-fluid" style="width: 100%">
                    </td>
                    <td>
                        <a  class="edit btn btn-primary" href="{{ route('home.update', $sl->id) }}">
                            Ganti Gambar
                        </a>
                    </td>
                    <td>
                        <form onsubmit="return confirm('Yakin menghapus data ini ?');"
                            action="{{ route('home.destroy', $sl->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Tidak Ada Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
