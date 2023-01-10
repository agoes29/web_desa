@extends('dashboard.main')
@section('aset')
    <div class="card px-2">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h5>DATA ASET DESA</h5>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                    <a href="/asetinput"><button class="btn btn-primary">Tambah Aset Baru</button></a>
                </div>
            </div>
        </div>
        @csrf
        <table id="example2" class="table table-sm table-bordered table-hover dataTable dtr-inline table-responsive-md"
            aria-describedby="example2_info">
            <thead>
                <tr>
                    <th rowspan="1" colspan="1">No</th>
                    <th rowspan="1" colspan="1">Jenis Barang</th>
                    <th rowspan="1" colspan="1">Kode Barang</th>
                    <th rowspan="1" colspan="1">Identitas Barang</th>
                    <th rowspan="1" colspan="1">Asal Usul Barang</th>
                    <th rowspan="1" colspan="1">Tahun Perolehan</th>
                    <th rowspan="1" colspan="1">Keterangan</th>
                    <th rowspan="1" colspan="1">Foto Barang</th>
                    <th rowspan="1" colspan="1">UBAH</th>
                    <th rowspan="1" colspan="1">HAPUS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($aset as $as)
                    <tr>
                        <td>{{ $as->no }}</td>
                        <td style="word-break:break-all;">{{ $as->jb }}</td>
                        <td style="word-break:break-all;">{{ $as->kb }}</td>
                        <td style="word-break:break-all;">{{ $as->ib }}</td>
                        <td style="word-break:break-all;">{{ $as->ab }}</td>
                        <td style="word-break:break-all;">{{ $as->tp }}</td>
                        <td style="word-break:break-all;">{{ $as->kt }}</td>
                        <td style="word-break:break-all;">
                            <img src="{{ Storage::url($as->fb) }}" alt="" class="img-fluid" style="width: 50px">
                        </td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('aset.update', $as->id) }}">
                                UPDATE
                            </a>
                        </td>
                        <td>
                            <form onsubmit="return confirm('Yakin menghapus data ini ?');"
                                action="{{ route('aset.destroy', $as->id) }}" method="POST">
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
        </table>
        {{-- <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Data 1 sampai 10
                    dari 567 data</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    {{ $aset->links() }}
                </div>
            </div>
        </div> --}}
    </div>
@endsection
