@extends('layout.MusterLayout')

@section('title','blog')

@include('layout.otherPageHeader',['headertitle'=>"Blog"])

@section('content')


<div class="container mt-5 mb-5 ">
  <div class="row mt-5">
    <div class="text-center mt-5 mb-5">
       <h1>LATEST NEWS & BLOGS</h1>
       <p><small>We help you create any website quickly flexibility and performance</small></p>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="card text-center mb-5 " style="background-color:#FFFFFF;">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color:#FFFFFF "></div>
          </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>  
          </div>  
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="card text-center mb-5 " style="background-color:#FFFFFF;">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color:#FFFFFF "></div>
          </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>  
          </div>  
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="card text-center mb-5 " style="background-color:#FFFFFF;">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color:#FFFFFF "></div>
          </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>  
          </div>  
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4">
      <div class="card text-center mb-5 " style="background-color:#FFFFFF;">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color:#FFFFFF "></div>
          </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>  
          </div>  
      </div>
    </div>
 

    </div>
  </div>

</div>








@endsection