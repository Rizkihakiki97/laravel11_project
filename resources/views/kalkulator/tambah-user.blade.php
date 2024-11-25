@extends('kalkulator.index')
@section('content')
<h1>{{ $title ?? '' }}</h1>

<form action="{{ route('user.store') }}" method="post">
    @csrf
    <label for="">Nama</label>
    <input type="text" name="name" placeholder="Masukkan nama anda">
    <br>
    <label for="">Email</label>
    <input type="email" name="email" placeholder="Masukkan nama email" />
    <br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Masukkan nama password" />
    <br>
    <button>Simpan</button>
</form>


@endsection