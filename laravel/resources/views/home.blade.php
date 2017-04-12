@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome to Cie Loom Operational Website, here's our features :<br><br>
                    <ul>
                        <li><a href="{{ url('/addpesanan') }}">Make Supply Order</a><br></li>
                        <li><a href="{{ url('/daftarpesanan') }}">Supply Order Lists</a><br></li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
