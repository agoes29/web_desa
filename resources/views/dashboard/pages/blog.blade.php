@extends('dashboard.main')
@section('blog')

<div class="card">
<table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
    @csrf
<thead><tr>
        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
    </thead>
    <tbody>
        @forelse ($blog as $bl)
            <tr>
                <td>{{ $bl->id }}</td>
                <td>{{ $bl->title }}</td>
                <td>{{ $bl->conten }}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Tidak Ada Data</td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
    </tfoot>
</table>
</div>


@endsection