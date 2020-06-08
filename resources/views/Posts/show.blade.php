@extends('layouts.app')

@section('title','| Created!')
    
@section('content')

@include('Partials._messages')

<div class="jumbotron">
    
    <div class="row">
        <div class="col-md-8">
            <h1 class="display-4 ">{{$PostData->title}}</h1>
            <p class="lead">{{$PostData->body}}</p>
            
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{$PostData->created_at}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{$PostData->updated_at}}</dd>
                </dl>
                <div class="row">
                    <div class="col-sm-4">
                        {!! Html::linkRoute('Posts.edit','Edit',array($PostData->id),array('class'=>'btn btn-primary btn-block')) !!}
                    </div>
                <div class="col-sm-4">
                        {!! Form::open(array('route'=>array('Posts.destroy',$PostData->id),'method'=>'DELETE')) !!}
                        {{ Form::submit('Delete',array('class'=>'btn btn-danger btn-block')) }}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    
    <hr class="my-4">
   
  </div>
    
@endsection