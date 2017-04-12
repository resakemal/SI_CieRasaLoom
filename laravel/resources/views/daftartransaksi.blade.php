<html>
    <body>
    	<table name='daftar_transaksi'>
        <tr>
            <th>Waktu Transaksi</th>
            <th>Total Harga</th>
        </tr>
        @foreach($inputs as $input)
        <tr>
            <td>{!! $input->created_at !!}</td>
            <td>{!! $input->total_harga !!}</td>
        </tr>
        @endforeach
    </body>
</html>