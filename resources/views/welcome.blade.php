@extends('layouts.welcome')

@section('content')
    <div class="title m-b-md">

      {{config('app.name')}}
        <br/>Tortugas Boilerplate
    </div>
    <div class="m-b-md">
        Sample users:<br/>
        Admin user: admin.laravel@labs64.com / password: admin<br/>
        Demo user: demo.laravel@labs64.com / password: demo<br/>
        Experimento
    </div>
@endsection
