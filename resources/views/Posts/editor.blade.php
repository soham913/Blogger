@extends('layouts.app')

@section('title','| Edit Post')

@section('content')

<h1>Edit Post</h1>
<div class="jumbotron">
        
    
        {!! Form::model($Postdata, ['route'=> ['Posts.update',$Postdata->id],'method'=>'PUT']) !!}
            {{Form::label('title','Title: ',array('class'=>'font-weight-bold '))}}
           {{ Form::text('title',null,array('class'=>'form-control input-lg form-spacing-top'))}}
           {{Form::label('body','Content: ',array('class'=>'font-weight-bold '))}}
           {{ Form::textarea('body',null,array('class'=>'form-control'))}} 
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{$Postdata->created_at}}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{$Postdata->updated_at}}</dd>
                </dl>
                <div class="row">
                    <div class="col-sm-6">
                        {{Form::submit('Update',array('class'=>'btn btn-success'))}}
                        {!! Html::linkRoute('Posts.show','Cancel',array($Postdata->id),array('class'=>'btn btn-danger')) !!}                    </div>
                </div>
            </div>
        </div>
        {{Form::close()}}
    </div>
    
   
   
  
    
    
    
@endsection





