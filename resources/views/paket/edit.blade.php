@extends('layout.app')
@section('content')
<div class="card">
    <h3 class="card-header">{{ $title ?? '' }}</h3>
    <div class="card-body">
        <form action="{{ route('service.update',$service->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="">Nama Paket</label>
                <input value="{{ $service->service_name }}" type="text" class="form-control" name="service_name"
                    placeholder="Nama Paket">
            </div>
            <div class="mb-3">
                <label for="">Harga</label>
                <input value="{{ $service->price }}" type="text" class="form-control" name="price" placeholder="Harga">
            </div>
            <div class="mb-3">
                <label for="">Dekripsi</label>
                <input value="{{ $service->description }}" type="text" class="form-control" name="description"
                    placeholder="Deskripsi">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection