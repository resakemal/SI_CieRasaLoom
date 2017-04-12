@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Tambah Transaksi</b></div>

                <div class="panel-body">
                    {!! Form::open(['url' => '/addtransaksi/submit']) !!}

                    {!! Form::label('makanan_id_lbl', 'Kode Makanan') !!}
                    <div style="display:inline;padding-left: 1.8em">
                    {!! Form::text('makanan_id') !!}
                    </div>
                    <br>
                    {!! Form::label('jumlah_lbl', 'Jumlah') !!}
                    <div style="display:inline;padding-left: 5.2em">
                    {!! Form::text('jumlah') !!}
                    </div>
                    <br>
                    <br>
                    <input type="button" value="Tambah" onclick="updateTable();">

                    {!! Form::submit('Submit') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection