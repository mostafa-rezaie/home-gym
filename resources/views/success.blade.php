{{-- @extends('layouts.app')

@section('headHome')
<div class="container">
    <hello></hello>
</div>
    
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vue</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" ></script>

</head>
<body>
    <div id="app">
        <hello></hello>

    </div>
    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>