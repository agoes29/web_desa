@extends('dashboard.main')
@section('aset')
<div class="card">
    <div class="card-header">
        Penambahan ASET Desa Baru
    </div>
    <div class="card-body px-5">
        <form action="{{ route('aset.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="no" class="form-label">No Aset</label>
            <input type="text" class="form-control" id="no" name="no" required>
        </div>
        <div class="mb-3">
            <label for="jb" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" id="jb" name="jb" required>
        </div>
        <div class="mb-3">
            <label for="kb" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="kb" name="kb" required>
        </div>
        <div class="mb-3">
            <label for="ib" class="form-label">Identitas Barang</label>
            <input type="text" class="form-control" id="ib" name="ib" required>
        </div>
        <div class="mb-3">
            <label for="ab" class="form-label">Asal Usul Barang</label>
            <input type="text" class="form-control" id="ab" name="ab" required>
        </div>
        <div class="mb-3">
            <label for="tp" class="form-label">Tahun Perolehan</label>
            <input type="text" class="form-control" id="tp" name="tp" required>
        </div>
        <div class="mb-3">
            <label for="kt" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="kt" name="kt" required>
        </div>
        <div class="mb-3">
            <label for="fb" class="form-label">Foto Aset</label>
            <input type="file" class="form-control" id="fb" name="fb" required>
            <p><label for="fb" class="form-label"><small>Preview</small></label><br><img
                id="preview-image-before-upload" src="" alt="" class="img-fluid" style="width: 200px"></p>
        </div>
        <button type="submit" class="btn btn-md btn-primary px-4">Tambahkan Aset</button>
        <a href="/admin/aset" class=" btn btn-md btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>
@endsection
