<html>
    <body>
    	<ul>
        @foreach($inputs as $input)
        	<li>
        		<div>
        			{!! $input->pesanan_id !!}
        			<br>
        			{!! $input->created_at !!}
        		</div>
        	</li>
        @endforeach
    	</ul>
        {!! Form::open(['url' => '/addpesanan']) !!}
        {!! Form::submit('Add') !!}
        {!! Form::close() !!}
    </body>
</html>