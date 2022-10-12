@extends('dashboard.main')
@section('blog')
    <div class="card">
        @csrf
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th rowspan="1" colspan="1">ID</th>
                        <th rowspan="1" colspan="1">Title</th>
                        <th rowspan="1" colspan="1">Conten(s)</th>
                        <th rowspan="1" colspan="1">Update</th>
                        <th rowspan="1" colspan="1">Delete</th>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            {{-- {{ $bl }} --}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($blog as $bl)
                    <tr>
                        <td>{{ $bl->id }}</td>
                        <td>{{ $bl->title }}</td>
                        <td>{{ $bl->conten }}</td>
                        <td><a href="">Update</a></td>
                        <td><a href="">Delete</a></td>
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
