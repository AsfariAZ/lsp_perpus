@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @include('components.user.sidebar')
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-9">
                    <h1>Buku yang sedang dipinjam</h1>
                </div>
                <div class="col-1">
                    <a href="{{ route('user.form_peminjaman') }}" class="btn btn-primary float">Pinjam</a>
                </div>
            </div>
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pemngembalian</th>
                            <th>Kondisi Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjamans as $key => $peminjaman)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $peminjaman->buku->judul }}</td>
                                <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                                <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                                <td>{{ $peminjaman->kondisi_buku_saat_dipinjam }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
