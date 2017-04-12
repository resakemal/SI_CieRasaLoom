<html>
    <body>
        {!! Form::open(['url' => '/daftartransaksi']) !!}

        {!! Form::label('tanggal_lbl', 'Tanggal') !!}
        {!! Form::text('tanggal') !!}
        <br>

        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </body>
</html>