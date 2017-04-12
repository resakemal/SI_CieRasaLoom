<html>
    <body>
    	{!! $input->pesanan_id !!}
        <br>
        {!! $input->created_at !!}
        <br>
        {!! Form::open(['url' => '/editstatus/submit']) !!}

        {{ Form::hidden('pesanan_id', $input->pesanan_id) }}

        {!! Form::select('status', ['1' => 'Pesanan dikirim', '2' => 'Pesanan diterima', '3' => 'Barang dikirim', '4' => 'Barang diterima',], $selected) !!}

        {!! Form::submit('Edit') !!}

        {!! Form::close() !!}
    </body>
</html>