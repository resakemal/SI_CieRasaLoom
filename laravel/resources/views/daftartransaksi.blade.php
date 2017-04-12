@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Halaman Utama</b></div>

                <div class="panel-body">
                	<table name='daftar_transaksi'>
                    <tr>
                        <th>Waktu Transaksi</th>
                        <th>Total Harga</th>
                    </tr>
                    @foreach($inputs as $input)
                    <tr>
                        <td>{!! $input->created_at !!}</td>
                        <td>{!! $input->total_harga !!}</td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection