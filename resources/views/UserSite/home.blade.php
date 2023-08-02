@extends('layout.MusterLayout')

@section('title','hello world ')

@section('content')
<!-- carrosel -->
<div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="p-5 text-start bg-image" style="
                    background-image: url('Asset/slider-1.jpg');
                    height: 600px;
                    margin-top: 58px;  
                    background-repeat: no-repeat;
            
                    background-size: cover;
                  ">
                  <div class="mask" >
                    <div class="container">
                      <div class="row">
                        <div class="col-md-5">
                        <div class="text-black " style="margin-top: 40%;">
                        <h1 class="mb-3">Store Management System</h1>
                        <p>Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                        <button class="btn btn-info"> TO ORDER</button>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
    <div class="carousel-item">
    <div class="p-5 text-start bg-image" style="
            background-image: url('Asset/slider-2.jpg');
            height: 600px;
            margin-top: 58px;  
            background-repeat: no-repeat;
         
            background-size: cover;
          ">
          <div class="mask" >
          <div class="container">
              <div class="row">
                <div class="col-md-5">
                <div class="text-black " style="margin-top: 40%;">
                <h1 class="mb-3">ISP Billing Softwarer</h1>
                <p>Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                 <button class="btn btn-info"> TO ORDER</button>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    </div>
    <div class="carousel-item">
    <div class="p-5 text-start bg-image" style="
            background-image: url('Asset/slider-3.jpg');
            height: 600px;
            margin-top: 58px;  
            background-repeat: no-repeat;
          
            background-size: cover;
          ">
          <div class="mask">
          <div class="container">
              <div class="row">
                <div class="col-md-5">
                <div class="text-white" style="margin-top: 40%;">
                <h1 class="mb-3">Web Design & Development</h1>
                <p>Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                 <button class="btn btn-info"> TO ORDER</button>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




 <div class="container mt-5">
    <div class="row mt-5">
      <div style="display: flex; flex-wrap:wrap; gap:20px; justify-content:center; align-content: center;  ">
          <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; width:90px; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/sd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>WEB DESIGN & DEVELOPMENT </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/wd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>SOFTWARE DEVELOPMENT</b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is a modern software development company in Bangladesh run by a group of professional software.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue; ">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/dm.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>DIGITAL MARKETING </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company provide Digital Marketing service in Bangladesh run by a group of professional Marketing.</p>
                </div>
              </div>
            </div> 
            </div>
      </div>

    </div>
</div>

<div style="background-color:  #006356; padding-bottom:100px;">
<div class="container">
    <div class="row mt-5 mb-5">
      <div class="col text-white text-center mt-5">
          <h3 >CREATIVE AGENCY</h3>
          <p><small>Software Solution Company web design & development, software development services to local and international companies.</small></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4  ">
          <ul class="  list-group list-group-light">
                <li style="background-color: #006356; border-bottom:0px solid white " class="text-white  list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                      class="rounded-circle" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white ">Cross Browser Support</h4>
                      <p class=" mb-0 text-white "> <small> We create cross browser supported website.</small></p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356; border-bottom:0px solid white " class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Share your passion</h4>
                      <p class="mb-0 text-white">We are passionate about sharing ideas with others and helping them ground their passions into real.</p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356;  border-bottom:0px solid white" class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Beautiful Website</h4>
                      <p class=" mb-0 text-white">We design beautiful website for your business.</p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356;  border-bottom:0px solid white" class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Bootstrap supportn</h4>
                      <p class=" mb-0 text-white">We use Bootstrap for responsive design.</p>
                    </div>
                  </div>
                </li>
              
          </ul>
      </div>
      <div class="col-md-4 text-center">
          <img  src="{{url('Asset/dives.png')}}" alt="" height="100%">
      </div>
      <div class="col-md-4">
      <ul class="list-group list-group-light">
      <ul class="  list-group list-group-light">
                <li style="background-color: #006356; border-bottom:0px solid white " class="text-white  list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                      class="rounded-circle" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white ">Cross Browser Support</h4>
                      <p class=" mb-0 text-white "> <small> We create cross browser supported website.</small></p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356; border-bottom:0px solid white " class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Share your passion</h4>
                      <p class="mb-0 text-white">We are passionate about sharing ideas with others and helping them ground their passions into real.</p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356;  border-bottom:0px solid white" class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Beautiful Website</h4>
                      <p class=" mb-0 text-white">We design beautiful website for your business.</p>
                    </div>
                  </div>
                </li>
                <li style="background-color: #006356;  border-bottom:0px solid white" class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                      style="width: 45px; height: 45px" />
                    <div class="ms-3">
                      <h4 class="fw-bold mb-1 text-white">Bootstrap supportn</h4>
                      <p class=" mb-0 text-white">We use Bootstrap for responsive design.</p>
                    </div>
                  </div>
                </li>
              
          </ul>
          </ul>
      </div>
    </div>
  </div>

</div>

<!-- Our Services Section  -->
<div class="container mt-5">
   <div class="row">
    <div class=" text-center mt-5 ">
      <h1>OUR SERVICES</h1>
      <p><small>Software Solution Company is a modern software development company in Bangladesh run by a group of professional software engineers are highly skilled in Payroll Software, POS Software, school Management Software, Inventory Software and online Medicine and pharmacy management software development in Bangladesh. We all are spontaneously dedicating our time to produce the best and easily manageable software in an affordable price for you. We provide users special training to maintain the software and give unlimited revision until you are well satisfied!</small></p>
    </div>
    <div class="services">
    <div class="container mt-5">
    <div class="row mt-5">
      <div style="display: flex; flex-wrap:wrap; gap:20px; justify-content:center; align-content: center;  ">
          <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; width:90px; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/sd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>WEB DESIGN & DEVELOPMENT </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/wd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>SOFTWARE DEVELOPMENT</b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is a modern software development company in Bangladesh run by a group of professional software.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue; ">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/dm.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>DIGITAL MARKETING </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company provide Digital Marketing service in Bangladesh run by a group of professional Marketing.</p>
                </div>
              </div>
            </div> 
            </div>
      </div>

    </div>
    <div class="container mt-5">
    <div class="row mt-5">
      <div style="display: flex; flex-wrap:wrap; gap:20px; justify-content:center; align-content: center;  ">
          <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; width:90px; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/sd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>WEB DESIGN & DEVELOPMENT </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is the most famous company in Bangladesh in the case of web design and development.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue;">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/wd.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>SOFTWARE DEVELOPMENT</b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company is a modern software development company in Bangladesh run by a group of professional software.</p>
                </div>
              </div>
            </div> 
            </div>
            <div>
            <div class="cardItem">
              <div class="card" style=" height: 15rem; width: 22rem; background-color:aliceblue; ">
                <img class="m-auto mt-2" style="height:5rem ; border: 0px solid white; padding: .5rem;" src="{{URL('Asset/dm.png')}}" class="card-img-top" alt="Sunset Over the Sea" />
                  <div class="card-body text-center">
                  <h4 class="card-text" style="font-size: 20px;"> <b>DIGITAL MARKETING </b> </h4>
                  <p  style="padding: 5px; font-size: 12px; text-align: center;">Software Solution Company provide Digital Marketing service in Bangladesh run by a group of professional Marketing.</p>
                </div>
              </div>
            </div> 
            </div>
      </div>

    </div>
  </div>
  </div>
    </div>
   </div>
</div>


<!-- End service Section -->

<!-- Our Portfolio  -->
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

</div>
</div>


<!-- our blog section  -->

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


<div class="mobile" style="background-color:#F0F8FF ; margin-top: 150px; margin-bottom:150px; padding:50px;">
  <div class="container " >
    <div class="row mt-5">
        <div class="col-md-6">
          <img src="{{URL('Asset/img2.png')}}"  alt="" height="100%" width="70%">
        </div>
        <div class="col-md-6">
          <div class="mb-5">
            <h1>AWESOME FEATURES</h1>
              <p><small>We care about mobile application for your business growth.</small></p>
          </div>
          <ul class="list-group list-group-light">      
              <li style="background-color: #F0F8FF;" class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                    style="width: 45px; height: 45px" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">Mobile App Development</p>
                    <p class="text-muted mb-0">Our mobile application development team developed different types of mobile based application.</p>
                  </div>
            </div>
              </li>
              <li style="background-color: #F0F8FF;" class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                    style="width: 45px; height: 45px" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">Android App Development</p>
                    <p class="text-muted mb-0">We developed Android based mobile application.</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #F0F8FF;">
                <div class="d-flex align-items-center">
                  <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                    class="rounded-circle" />
                  <div class="ms-3">
                    <p class="fw-bold mb-1">Mobile App Design</p>
                    <p class="text-muted mb-0">Beautiful Design is a language that creates itself in mobile app to interpret reality. Our team concern about beautiful mobile app design</p>
                  </div>
                </div>
              
              </li>
            </ul>
        </div>
    </div>
  </div>

</div>


<!-- Footer -->




<!-- Footer -->

@endsection