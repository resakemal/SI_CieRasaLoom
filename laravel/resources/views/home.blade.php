@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Halaman Utama</b></div>

                <div class="panel-body">
                    Selamat datang di website operasional Kedai Aceh Cie Rasa Loom<br><br>
                    <ul>
                        <li><a href="{{ url('/addpesanan') }}">Pemesanan Bahan Baku</a><br></li>
                        <li><a href="{{ url('/daftarpesanan') }}">Daftar Pesanan Bahan Baku</a><br></li>
                        <li><a href="{{ url('/addtransaksi') }}">Kelola Transaksi</a><br></li>
                        <li><a href="{{ url('/daftartransaksi') }}">Daftar Transaksi</a><br></li>
                        <li><a href="{{ url('/addmakanan') }}">Tambah Menu</a><br></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
