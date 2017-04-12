<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem Informasi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Beranda</a>
                        <a href="{{ url('/addpesanan') }}">Pemesanan Bahan Baku</a>
                        <a href="{{ url('/daftarpesanan') }}">Daftar Pesanan Bahan Baku</a>
                        <a href="{{ url('/addtransaksi') }}">Kelola Transaksi</a>
                        <a href="{{ url('/daftartransaksi') }}">Daftar Transaksi</a>
                        <a href="{{ url('/addmakanan') }}">Tambah Menu</a>
                    @else
                        <a href="{{ url('/login') }}">Masuk</a>
                        <a href="{{ url('/register') }}">Daftar</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {!! Html::image('img/cieloom.png', 'pict', array('width' => '80%', 'height' => '80%')) !!}
                </div>

                <div class="links">
                    <a>website operasional rumah makan kedai aceh cie rasa Loom</a>
                </div>
            </div>
        </div>
    </body>
</html>
