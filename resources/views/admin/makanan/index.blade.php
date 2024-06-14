@extends('admin.layouts.main')

@section('container')
<div class="container">
    <h1>Daftar Makanan</h1>
    <a href="{{ route('adminmakanan.create') }}" class="btn btn-primary">Tambah Makanan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makanans as $makanan)
            <tr>
                <td>{{ $makanan->nama }}</td>
                <td>{{ $makanan->harga }}</td>
                <td>{{ $makanan->deskripsi }}</td>
                <td><img src="{{ Storage::url($makanan->gambar) }}" alt="{{ $makanan->nama }}" width="100"></td>
                <td>{{ $makanan->kategori }}</td>
                <td>
                    <a href="{{ route('adminmakanan.show', $makanan->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('adminmakanan.edit', $makanan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('adminmakanan.destroy', $makanan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection