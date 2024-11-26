@extends('layout.app')
@section('content')
<div class="card">
    <h3 class="card-header">Data Pengguna</h3>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="password">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
</div>
@endsection