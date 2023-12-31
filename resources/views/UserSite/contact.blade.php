@extends('layout.MusterLayout')

@section('title','hello world ')

@include('layout.otherPageHeader',['headertitle'=>"Contact Us "])

@section('content')

<main>
    <div class="container-fluid  mb-5 " style="margin-top: 10%; ">
        <div class="container">
        <div class="row">
            <h6>Have a Question </h6>
            <h3 class="mb-5">CONTACT US</h3>
            <div class="col-md-8 col-lg-6 col-sm-12 ">
            <form>
                <!-- Name input -->
            
                <div class="form-outline mb-4">
                <input type="text" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Name</label>
                </div>
            
                <!-- Email input -->
                <div class="form-outline mb-4">
                <input type="email" id="form4Example2" class="form-control" />
                <label class="form-label" for="form4Example2">Email address</label>
                </div>
            
                <!-- Message input -->
                <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Message</label>
                </div>
            
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                <label class="form-check-label" for="form4Example4">
                    Send me a copy of this message
                </label>
                </div>
            
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 text-left " style="justify-content: center; margin-left:10%;">
            <h2>Keep In Touch</h2>
            <p>95 South Park Ave.</p>
            <p> info@blanca.com</p>
            <p> (234) 0200 17813</p>
            <p>(234) 0200 17813</p>
            </div>
        </div>
        </div>
    </div>
</main>






@endsection