<html>
    <body>
        {!! Form::open(['url' => 'addpesanan/submit']) !!}

        {!! Form::label('pemasok_id', 'Nama Pemasok') !!}
        {!! Form::select('pemasok_id', $inputs) !!}
        <br>
        {!! Form::label('nama_barang', 'Nama Barang') !!}
        {!! Form::text('nama_barang') !!}
        <br>
        {!! Form::label('jum_barang', 'Jumlah Barang') !!}
        {!! Form::text('jum_barang') !!}
        <br>
        {!! Form::submit('Add') !!}

        {!! Form::close() !!}
    </body>
</html>