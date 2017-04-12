<html>

{!! Html::script('js/updatetable.js'); !!}
    <body>
        {!! Form::open(['url' => '/addpesanan/submit']) !!}

        {!! Form::label('pemasok_id', 'Nama Pemasok') !!}
        {!! Form::select('pemasok_id', $inputs) !!}
        <br>
        {!! Form::label('nama_barang_lbl', 'Nama Barang') !!}
        {!! Form::text('nama_barang') !!}
        <br>
        {!! Form::label('jum_barang_lbl', 'Jumlah Barang') !!}
        {!! Form::text('jum_barang') !!}
        <br>

        <input type="button" value="Add Barang" onclick="updateTable();">

        <table id="tabel_barang">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

        {!! Form::submit('Submit') !!}
        {!! Form::close() !!}
    </body>
</html>