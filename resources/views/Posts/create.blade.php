@extends('main')

@section('title','| New Post')
    

@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
    
@endsection
@section('content')
    <h1 class = "">Create New Post</h1>
    <hr>
    {!! Form::open(['route' => 'Posts.store','data-parsley-validate'=>'']) !!}
        {{ Form::label('title','Title:',array('class'=>'font-weight-bold'))}}
        {{ Form::text('title',null, array('class'=>'form-control','required'=>'','Maxlength'=>'255')) }}
        {{ Form::label('body','Content:',array('class'=>'font-weight-bold'))}}
        {{ Form::textarea('body',null, array('class'=>'form-control','required'=>''))}}
        <br>
        {{ Form:: submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block'))}}
    {!! Form::close() !!}

@endsection

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}


@endsection

