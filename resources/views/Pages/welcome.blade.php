@extends('main')
@section('content')
    
<div class="row">
  <div class="col-md-12">
              <div class="jumbotron">
                  <div class="container">
                  <h1 class="display-4">Hello,There!</h1>
                      <p class="lead">Welcome A board.</p>
                      <hr class="my-4">
                      <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a>
                  </div>
              </div>
          </div>   
  </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam blanditiis tenetur, debitis placeat sit, 
                veniam quaerat aliquid facere quibusdam earum delectus ea incidunt quasi sed nobis,
                numquam voluptatum amet obcaecati?</p>
                <a class = "btn btn-primary" href = "#">Know More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam blanditiis tenetur, debitis placeat sit, 
                veniam quaerat aliquid facere quibusdam earum delectus ea incidunt quasi sed nobis,
                numquam voluptatum amet obcaecati?</p>
                <a class = "btn btn-primary" href = "#">Know More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam blanditiis tenetur, debitis placeat sit, 
                veniam quaerat aliquid facere quibusdam earum delectus ea incidunt quasi sed nobis,
                numquam voluptatum amet obcaecati?</p>
                <a class = "btn btn-primary" href = "#">Know More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam blanditiis tenetur, debitis placeat sit, 
                veniam quaerat aliquid facere quibusdam earum delectus ea incidunt quasi sed nobis,
                numquam voluptatum amet obcaecati?</p>
                <a class = "btn btn-primary" href = "#">Know More</a>
            </div>
    </div>

  <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
  </div>

  @endsection
