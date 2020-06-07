@extends('main')  

@section('title','| Contact')
    
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-4">Contact Us.</h1>
                <p class="lead">We'll be glad to hear from you.</p>
                <hr class="my-4">
                <form>
                  <div class="form-group">
                    <label name = "Email">Email: </label>
                    <input id = "email" placeholder = "Enter Email" class = form-control/>
                  </div>

                  <div class="form-group">
                    <label name = "Subject">Subject: </label>
                    <input id = "subject" placeholder = "Enter subject" class = form-control/>
                  </div>

                  <div class="form-group">
                    <label name = "Email">Comments: </label>
                    <textarea id = "email" placeholder = "Enter Email" class = form-control> </textarea>
                  </div>

                  <submit class = "btn btn-primary">Submit</submit>
                </form>
            </div>
        </div>
  </div>
</div>

@endsection


