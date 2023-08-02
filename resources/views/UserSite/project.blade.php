@extends('layout.MusterLayout')

@section('title','hello world ')

@include('layout.otherPageHeader',['headertitle'=>"Project"])

@section('content')

<main>
    <div class="container mt-5 ">
    <div class="row mt-5 ">
        <div class="text-center mt-5 mb-5 ">
        <h1>OUR PORTFOLIO</h1>
        <p><small>Here is some project what we have done already.</small></p>
        </div>
        <div class="portfolio">
        <div class="container">
    <section class="text-center">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple">
                <img
                src="https://code-theme.com/html/interior/images/services/s-5.jpg"
                class="img-fluid"
                alt="Sample"
                />
                <div class="mask" style="background-color: rgba(255, 255, 255, 0);">
                <div class="d-flex justify-content-center align-items-end h-100">
                    <h2 style="color:rgb(0, 46, 5);" ><i>Residential Interior</i> </h2>
                </div>
                </div>
            </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://code-theme.com/html/interior/images/services/s-4.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://code-theme.com/html/interior/images/services/s-1.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://code-theme.com/html/interior/images/services/s-1.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://code-theme.com/html/interior/images/services/s-5.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://code-theme.com/html/interior/images/services/s-5.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>
        </div>
        </div>
    
    </section>
    
    </div>
</main>




@endsection