@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Tambah Menu</b></div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'TransaksiController@addmakanan']) !!}

                    {!! Form::label('nama_makanan_lbl', 'Nama Makanan') !!}
                    <div style="display:inline;padding-left: 1.6em">
                    {!! Form::text('nama_makanan') !!}
                    </div>
                    <br>
                    {!! Form::label('harga_lbl', 'Harga') !!}
                    <div style="display:inline;padding-left: 6.0em">
                    {!! Form::text('harga') !!}
                    </div>
                    <br>
                    <br>
                    {!! Form::submit('Submit') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection