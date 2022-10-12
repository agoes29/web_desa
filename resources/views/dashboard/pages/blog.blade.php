@extends('dashboard.main')
@section('blog')
    <div class="card px-2">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                DATA BLOG
            </div>  
            <div class="col-md-6 d-flex flex-row-reverse">
                <a href="/bloginput"><button>Tambah Blog Baru</button></a>
            </div>  
        </div>  
    </div>
        @csrf
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th rowspan="1" colspan="1">ID</th>
                        <th rowspan="1" colspan="1">Title</th>
                        <th rowspan="1" colspan="1">Conten</th>
                        <th rowspan="1" colspan="1">Update</th>
                        <th rowspan="1" colspan="1">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($blog as $bl)
                    <tr>
                        <td>{{ $bl->id }}</td>
                        <td>{{ $bl->title }}</td>
                        <td>{{ $bl->conten }}</td>
                        <td><a href="">Update</a></td>
                        <td>
                            <form onsubmit="return confirm('Yakin menghapus data ini ?');" action="{{ route('blog.destroy', $bl->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak Ada Data</td>
                    </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Title</th>
                    <th rowspan="1" colspan="1">Conten(s)</th>
                    <th rowspan="1" colspan="1">Update</th>
                    <th rowspan="1" colspan="1">Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
