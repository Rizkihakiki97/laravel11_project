@extends('layout.app')
@section('content')
<div class="card">
    <h3 class="card-header">{{ $title ?? '' }}</h3>
    <div class="card-body">
        <form action="{{ route('customer.update',$customer->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input value="{{ $customer->customer_name }}" type="text" class="form-control" name="customer_name"
                    placeholder="Nama Paket">
            </div>
            <div class="mb-3">
                <label for="">Telp</label>
                <input value="{{ $customer->phone }}" type="text" class="form-control" name="phone" placeholder="Telp">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input value="{{ $customer->address }}" type="text" class="form-control" name="address"
                    placeholder="Alamat">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection