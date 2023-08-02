@extends('layout.MusterLayout')

@section('title','hello world ')


@section('content')
@include('layout.otherPageHeader',['headertitle'=>"About Me "])

<!-- About Interiour  -->

<div class="container mt-1 mb-0" >
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12 col-lg-6 col-xsm-6">
            <img src="{{URL('Asset/sd.png')}}" alt="" height="80%" width="80%">
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 col-xsm-6">
            <h1 class="text-justify">ABOUT OUR COMPANY</h1>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum odio id voluptatibus incidunt cum? Atque quasi eum debitis optio ab. Esse itaque officiis tempora possimus odio rerum aperiam ratione, sunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit sunt.</p>
            <button style="border: 0px solid white; border-radius: 5px; height: 3rem; width: 10rem; background-color: red;" class="text-white">READ MORE </button>
        </div>
    </div>
</div>


<!-- Our Team Member  -->

<div class="container-fluid mt-5 mb-5">
  <div class="container mt-5">
    <div class="row mb-5">
        <h1 class="text-center">
            Our Amazing Team Member
        </h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3 col-sm-6 col-xsm-12">
             <div class="card" style="width: 18rem;">
                <img src="https://code-theme.com/html/interior/images/team/t-2.png" class="card-img-top" alt="Sunset Over the Sea"/>
                <div class="card-body">
                    <h4 class="text-center">Mehjabin Ahmed</h4>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-6 col-xsm-12">
            <div class="card" style="width: 18rem;">
                <img src="https://code-theme.com/html/interior/images/team/t-4.png" class="card-img-top" alt="Sunset Over the Sea"/>
                <div class="card-body">
                    <h4 class="text-center">Donal Trump</h4>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-6 col-xsm-12">
            <div class="card" style="width: 18rem;">
                <img src="https://code-theme.com/html/interior/images/team/t-1.png" class="card-img-top" alt="Sunset Over the Sea"/>
                <div class="card-body">
                   <h4 class="text-center">Putin Kaka</h4>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-6 col-xsm-12">
            <div class="card" style="width: 18rem;">
                <img src="https://code-theme.com/html/interior/images/team/t-3.png" class="card-img-top" alt="Sunset Over the Sea"/>
                <div class="card-body">
                    <h4 class="text-center">Kign Jon Un</h4>
                  <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>


<!-- Our Working proccess end  -->
<div class="container mt-5 mb-5">
   <div class="row">
    <div class=" text-center mt-5 ">
      <h1>What We Do </h1>
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