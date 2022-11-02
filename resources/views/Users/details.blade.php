@extends('plantilla')

@section('title','User Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="https://dbeaver.io/wp-content/uploads/2015/09/beaver-head.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">{{$user->lastname}}</p>
                    <p class="card-text">{{$user->email}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
