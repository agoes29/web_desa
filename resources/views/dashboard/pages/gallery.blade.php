@extends('dashboard.main')
@section('gallery')
    <div class="card">
        <div class="card-header">
            Update Gallery
        </div>
        <div class="card-body px-5">
            <form action="{{ route('gallery.store') }} " method="POST" enctype="multipart/form-data">
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
                <div class="input-group control-group increment">
                    <input type="file" name="imagefile[]" class="form-control">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fas fa-plus"></i>Add</button>
                    </div>
                </div>
                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top: 10px">
                        <input type="file" name="imagefile[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i>Remove</button>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info" style="margin-top: 12px"><i class="fas fa-check-circle"></i>Submit</button>
            </form>
        </div>
    </div>
    <div class="card">
<div class="card-header">
    tabel Gallery
</div>
<div class="card-body">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $image)
                <tr>
                    <td>{{$image->id}}</td>
                    <td>@foreach (json_decode($image->imagefile) as $picture )
                        <img src="{{ Storage::url($picture) }}" alt="" style="height: 120px; width: 200px">
                        @endforeach
                    </td>
                    <td>
                        <img src="{{Storage::url(json_decode($image->imagefile)[0])}}" alt="" style="height: 120px; width: 200px">
                    </td>
                    {{-- {{dd(json_decode($image->imagefile)[1])}} --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </div>
@endsection
