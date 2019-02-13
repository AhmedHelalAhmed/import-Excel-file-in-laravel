<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">

    <title>imported data</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            padding: 5%
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">
        employees imported data
    </h2>

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif

    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    <table>
        <thead>
        {{--@for($i=0 ;$i<count(array_keys($data[0]->toArray()))-2;$i++ )--}}
            {{--<th>{{array_keys($data[0]->toArray())[$i]}}</th>--}}
        {{--@endfor--}}
        </thead>
        <tbody>
        {!! var_dump(json_decode(($data))) !!}
        @foreach($data as $employee)
            <tr>

                {!! dd($data) !!}
                @foreach($employee as $record)
                    <td>{{$record}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
</body>
</html>



