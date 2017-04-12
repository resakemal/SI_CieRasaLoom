<html>
    <body>
        {!! Form::open(['action' => 'TransaksiController@addmakanan']) !!}

        {!! Form::label('nama_makanan_lbl', 'Nama Makanan') !!}
        {!! Form::text('nama_makanan') !!}
        <br>
        {!! Form::label('harga_lbl', 'Harga') !!}
        {!! Form::text('harga') !!}
        <br>

        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </body>
</html>