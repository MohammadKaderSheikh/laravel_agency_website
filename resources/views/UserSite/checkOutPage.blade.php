@extends('layout.MusterLayout')

@section('title','hello world ')
@section('content')
<main class="mt-5 mb-5 ">
  

<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container">
        <!-- Heading -->
        <h2 class="my-5 text-center">Checkout form</h2>

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <!--Card-->
                <div class="card p-4">
                    <!--Grid row-->
                    <div class="row mb-3">
                        <!--Grid column-->
                        <div class="col-md-6 mb-2">
                            <!--firstName-->
                            <div class="form-outline">
                                <input type="text" id="typeText" class="form-control" />
                                <label class="form-label" for="typeText">First name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 mb-2">
                            <!--lastName-->
                            <div class="form-outline">
                                <input type="text" id="typeText" class="form-control" />
                                <label class="form-label" for="typeText">Last name</label>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->

                    <!--Username-->
                    <div class="input-group mb-4">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                    </div>

                    <!--email-->
                    <p class="mb-0">
                        Email (optional)
                    </p>
                    <div class="form-outline mb-4">
                         <input type="email" class="form-control" placeholder="youremail@example.com" aria-label="youremail@example.com" aria-describedby="basic-addon1" />
                    </div>

                    <!--address-->
                    <p class="mb-0">
                        Address
                    </p>
                    <div class="form-outline mb-4">
                        <input type="email" class="form-control" placeholder="1234 Main St" aria-label="1234 Main St" aria-describedby="basic-addon1" />
                    </div>

                    <!--address-2-->
                    <p class="mb-0">
                        Address 2 (optional)
                    </p>
                    <div class="form-outline mb-4">
                        <input type="email" class="form-control" placeholder="Apartment or suite" aria-label="Apartment or suite" aria-describedby="basic-addon1" />
                    </div>

                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <p class="mb-0">
                                Country
                            </p>
                            <div class="form-outline mb-4">
                        <input type="email" class="form-control" placeholder="United States" aria-label="United States" aria-describedby="basic-addon1" />
                    </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <p class="mb-0">
                                State
                            </p>
                            <div class="form-outline mb-4">
                        <input type="email" class="form-control" placeholder="California" aria-label="California" aria-describedby="basic-addon1" />
                    </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <p class="mb-0">
                                Zip
                            </p>
                            <div class="form-outline">
                                <input type="text" class="form-control"/>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->

                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">Shipping address is the same as my billing address</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">Save this information for next time</label>
                    </div>

                    <hr />

                    <div class="my-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                            <label class="form-check-label" for="flexRadioDefault1"> Credit card </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                            <label class="form-check-label" for="flexRadioDefault2"> Debit card </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                            <label class="form-check-label" for="flexRadioDefault3"> Paypal </label>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <p class="mb-0">
                                Name on card
                            </p>
                            <div class="form-outline">
                                <input type="text" class="form-control"/>
                                <div class="form-helper">Full name as displayed on card</div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <p class="mb-0">
                                Credit card number
                            </p>
                            <div class="form-outline">
                                <input type="text" class="form-control" />                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <p class="mb-0">
                                Expiration
                            </p>
                            <div class="form-outline">
                                <input type="text" class="form-control" />
                                
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <p class="mb-0">
                                CVV
                            </p>
                            <div class="form-outline">
                                <input type="text" class="form-control" />
                                
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4" />                    
                  <button class="btn btn-primary" type="button">Continue to checkout</button>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">
                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge rounded-pill badge-primary">3</span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
                <!-- Cart -->

                <!-- Promo code -->
                <form class="card p-2">
                        <div class="input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Promo code"
                        aria-label="Promo code"
                        aria-describedby="button-addon2"
                    />
                    <button class="btn btn-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                        redeem
                    </button>
                    </div>
                </form>
                <!-- Promo code -->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</main>
<!--Main layout-->



</main>
@endsection