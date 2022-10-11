@extends('dashboard.main')
@section('blog')
    <div class="card">
        @csrf
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
            @forelse ($blog as $bl)
                <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                            aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            {{-- {{ $bl }} --}}
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{ $bl->id }}</td>
                        <td>{{ $bl->title }}</td>
                        <td>{{ $bl->conten }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak Ada Data</td>
                    </tr>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Rendering engine</th>
                    <th rowspan="1" colspan="1">Browser</th>
                    <th rowspan="1" colspan="1">Platform(s)</th>
                    <th rowspan="1" colspan="1">Engine version</th>
                    <th rowspan="1" colspan="1">CSS grade</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
