@extends('layout.app')
@section('content')
<div class="card">
    <h3 class="card-header">{{ $title ?? '' }}</h3>
    <div class="card-body">
        <form action="{{ route('service.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama Paket</label>
                <input type="text" class="form-control" name="service_name" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="price" placeholder="Harga">
            </div>
            <div class="mb-3">
                <label for="">Deskripsi</label>
                <input type="text" class="form-control" name="description" placeholder="Deskripsi">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection