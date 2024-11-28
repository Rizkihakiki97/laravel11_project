@extends('layout.app')
@section('content')
<div class="card">
    <h3 class="card-header">{{ $title ?? '' }}</h3>
    <div class="card-body">
        <form action="{{ route('customer.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" class="form-control" name="customer_name" placeholder="Nama Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Telp</label>
                <input type="number" class="form-control" name="phone" placeholder="Telp">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="address" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection