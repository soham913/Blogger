@if (true)
<div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{Session::get('Success')}}
  </div>    
@endif

@if (count($errors) > 0)
  <div class="alert-danger" role="alert">
      @foreach ($errors->all() as $error)
          <strong>Error: </strong>{{$error}}
      @endforeach
  </div>

@endif