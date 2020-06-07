@extends('main')

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
                    <div class="col-sm-6">
                        {!! Html::linkRoute('Posts.edit','Edit',array($PostData->id),array('class'=>'btn btn-primary')) !!}
                        {!! Html::linkRoute('Posts.destroy','Delete',array($PostData->id),array('class'=>'btn btn-danger')) !!}                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <hr class="my-4">
   
  </div>
    
@endsection