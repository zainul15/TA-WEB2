@extends('base')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
			.zainul{
				color:red;
				font-weight: bold;
				font-size: 27px;
			}
			.ari{
				font-size: 27px;
				color:blue;
				font-weight: bold;
			}
			.dio{
				font-size: 27px;
				color:green;
				font-weight: bold;
			}
			.puput{
				font-size: 27px;
				color:maroon;
				font-weight: bold;
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
                font-size: 13px;
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
	<br><br><br>
            <div class="content">
                <div class="title m-b-md">
                    KELOMPOK 3
                </div>
				<div class="ari">
				Ari Dwi P (17/410824/SV/12751)
				</div>
				<div class="puput">
				Dianing Sukmapilia (17/410833/SV/12760)
				</div>
				<div class="dio">
				Kagunan Tridia A (17/415520/SV/13385)
				</div>
				<div class="zainul">
				M. Zainul Mutaqin	(17/416357/SV/14095)
				</div>
            </div>
        </div>
    </body>
</html>
@endsection