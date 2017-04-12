<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{!! Html::script('js/transaksi.js'); !!}
    <body>
        {!! Form::open(['url' => '/addtransaksi/submit']) !!}

        {{ Form::hidden('total', 0) }}

        {!! Form::label('makanan_id_lbl', 'Kode Makanan') !!}
        {!! Form::text('makanan_id') !!}
        <br>
        <p id='nama_makanan' name='nama_makanan'>Nama Makanan: </p>
        <p id='harga' name='harga_lbl'>Harga: </p>

        <input type="button" value="Add Makanan" onclick="updateHarga()">
        <p id='total_harga_lbl' name='total_harga_lbl'>Total harga: </p>
        <p id='total_harga' name='total_harga'></p>
        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </body>
</html>