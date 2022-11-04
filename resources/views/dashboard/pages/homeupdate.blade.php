@extends('dashboard.main')
@section('homeslide')
<div class="card">
    <div class="card-header">
        Update Gambar
    </div>
    <div class="card-body px-5">
        <form action="{{ route('home.update',$slide->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
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
            <label for="image" class="form-label">Ukuran Gambar =>  1000px X 500px</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Link Image" required value="{{ $slide->image }}">
            <p><label for="image" class="form-label"><small>Preview</small></label><br><img
                src="{{Storage::url($slide->image)}}" alt="" class="img-fluid" style="width: 100%"></p>
        </div>
        <button type="submit" class="btn btn-md btn-primary px-4">Update Gambar</button>
        <a href="/admin/home" class=" btn btn-md btn-secondary px-4">Batal</a>
        </form>
    </div>
</div>
@endsection
