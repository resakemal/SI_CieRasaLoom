<html>
    <body>
    	<ul>
        @foreach($inputs as $input)
        	<li>
        		<div>
                    {!! Form::label('id_pesanan', 'ID Pesanan: ') !!}
        			{!! $input->pesanan_id !!}
        			<br>
                    {!! Form::label('waktu_pesanan', 'Waktu Pesanan: ') !!}
        			{!! $input->created_at !!} 
                    <br>
                    {!! Form::label('status_pesanan', 'Status: ') !!}
                    @if($input->status === 1)       Pesanan dikirim
                    @elseif($input->status === 2)   Pesanan diterima
                    @elseif($input->status === 3)   Barang dikirim
                    @elseif($input->status === 4)   Barang diterima
                    @endif
                    <br>
                    {!! Html::linkAction('PesananController@status','Edit',['id' => $input->pesanan_id]) !!}
        		</div>
        	</li>
        @endforeach
    	</ul>
        {!! Form::open(['url' => '/addpesanan']) !!}
        {!! Form::submit('Add') !!}
        {!! Form::close() !!}
    </body>
</html>