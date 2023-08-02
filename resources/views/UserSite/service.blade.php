@extends('layout.MusterLayout')

@section('title','hello world ')

@include('layout.otherPageHeader',['headertitle'=>"Services"])

@section('content')

<div class="container mt-5 mb-5 ">
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








@endsection