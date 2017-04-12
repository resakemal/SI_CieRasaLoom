@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{!! Html::script('js/transaksi.js'); !!}

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Tambah Transaksi</b></div>

                <div class="panel-body">

                    {!! Form::open(['url' => '/addtransaksi/submit']) !!}

                    {{ Form::hidden('total', 0) }}

                    {!! Form::label('makanan_id_lbl', 'Kode Makanan') !!}
                    <div style="display:inline;padding-left: 1.8em">
                    {!! Form::text('makanan_id') !!}
                    </div>

                    <p id='nama_makanan' name='nama_makanan'><b>Nama Makanan: </b></p>
                    <p id='harga' name='harga_lbl'><b>Harga: </b></p>

                    <input type="button" value="Tambah" onclick="updateHarga()">
                    <br><br>
                    <p id='total_harga_lbl' name='total_harga_lbl'><b>Total harga: </b></p>

                    <p id='total_harga' name='total_harga'></p>
                    {!! Form::submit('Submit') !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

