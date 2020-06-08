@extends('layouts.app')

@section('title','| View Posts')

@include('Partials._messages')
    
@section('content')

<div class="row">
    <div class="col-md-10">
        <h1 class = "h1-margin-some">All Posts</h1>
    </div>

    <div class="col_md_2">
        <a href="{{ route('Posts.create')}}" class= "btn btn-primary btn-block btn-h1-margin" >Create New Post</a>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </thead>

                <tbody>
                    @foreach ($Posts as $post)
                   <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{substr($post->body,0,10)}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td> {{Html::linkRoute('Posts.edit','Edit',array($post->id),array('class'=>'btn btn-success'))}}                        
                        {{Html::linkRoute('Posts.show','View',array($post->id),array('class'=>'btn btn-primary'))}}
                    </td>
                        
                        
                </tr>
                        
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>  
@endsection