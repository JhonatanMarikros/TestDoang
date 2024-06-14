@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>{{ $makanan->nama }}</h1>
    <p>Harga: {{ $makanan->harga }}</p>
    <p>Deskripsi: {{ $makanan->deskripsi }}</p>
    <img src="{{ Storage::url($makanan->gambar) }}" alt="{{ $makanan->nama }}" width="300">
    <p>Kategori: {{ $makanan->kategori }}</p>
    <a href="{{ route('adminmakanan.index') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection