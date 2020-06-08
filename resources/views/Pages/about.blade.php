@extends('layouts.app')

@section('title','| About')
    

@section('content')
    
      
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-4">About {{$Name}}!</h1>
                <p class="lead">That's me.</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="/" role="button">Home</a>
            </div>
        </div>
    </div>
</div>


@endsection
   
            