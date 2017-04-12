@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Pemesanan Bahan Baku</b></div>

                <div class="panel-body">
                   
                    {!! Form::open(['url' => '/addpesanan/submit']) !!}
                    <div style="display:inline;">
                        {!! Form::label('pemasok_id', 'Nama Pemasok: ') !!}
                    </div>
                    
                    <div style="display:inline;padding-left: 1.8em">
                        {!! Form::select('pemasok_id', $inputs) !!}
                    </div>

                    <br><br>
                    <div style="display:inline;padding-right: 0.6em">
                        {!! Form::label('nama_barang_lbl', 'Nama Barang: ') !!}
                    </div>
                    <div style="display:inline;padding-left: 1.8em">
                        {!! Form::text('nama_barang') !!}
                    </div>

                    <br><br>
                    <div style="display:inline;">
                        {!! Form::label('jum_barang_lbl', 'Jumlah Barang: ') !!}
                    </div>
                    <div style="display:inline;padding-left: 1.8em">
                        {!! Form::text('jum_barang') !!}
                    </div>
                    
                    <br><br>
                    <input type="button" value="Add Barang" onclick="updateTable();">

                    <br><br>
                    <table id="tabel_barang" style="border: 1px solid #ccc; margin: 3px ; padding: 3px; width: 500px; text-align: center;">
                        <thead style="text-align: center;">
                            <tr style="border: 1px solid #ccc;">
                                <th style="text-align: center; border: 1px solid #ccc;">Nama Barang</th>
                                <th style="text-align: center; border: 1px solid #ccc;">Jumlah Barang</th>
                            </tr>
                        </thead>
                        <tbody style="border: 1px solid #ccc; height:50%;">
                            <tr style="border: 1px solid #ccc;">
                                <td style="text-align: center; border: 1px solid #ccc;"></td>
                                <td style="text-align: center; border: 1px solid #ccc;"></td>
                            </tr>
                        </tbody>
                    </table>

                    <br><br><br><br>
                    {!! Form::submit('Submit') !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection