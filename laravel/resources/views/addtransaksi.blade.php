<html>
    <body>
        {!! Form::open(['url' => '/addtransaksi/submit']) !!}

        {!! Form::label('makanan_id_lbl', 'Kode Makanan') !!}
        {!! Form::text('makanan_id') !!}
        <br>
        {!! Form::label('jumlah_lbl', 'Jumlah') !!}
        {!! Form::text('jumlah') !!}
        <br>

        <input type="button" value="Add Makanan" onclick="updateTable();">

        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </body>
</html>