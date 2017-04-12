@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Halaman Utama</b></div>

                <div class="panel-body">
                	<table name='daftar_transaksi' style="border: 1px solid #ccc; margin: 3px ; padding: 3px; width: 500px; text-align: center;">
                    <thead style="text-align: center;">
                        <tr style="border: 1px solid #ccc;">
                            <th style="text-align: center; border: 1px solid #ccc;">Waktu Transaksi</th>
                            <th style="text-align: center; border: 1px solid #ccc;">Total Harga</th>
                        </tr>
                    </thead>
                    @foreach($inputs as $input)
                    <tr style="border: 1px solid #ccc;">
                        <td style="text-align: center; border: 1px solid #ccc;">{!! $input->created_at !!}</td>
                        <td style="text-align: center; border: 1px solid #ccc;">{!! $input->total_harga !!}</td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection