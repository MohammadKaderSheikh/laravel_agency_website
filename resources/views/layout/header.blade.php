<header>
        <!-- Navbar -->
        <nav class=" navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: white; padding:10px;">
          <div class="container ">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars fa-2xl"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link text-white " aria-current="page" href="/index.html"><img src="{{URL('Asset/logo.png')}}" alt="" height="50px"></a>
                </li>
              </ul>
              <ul class=" navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 1.1 rem; color: rgb(65, 41, 174);">
                <li class="nav-item active " style="margin-left: 1%; margin-right: 1%;">
                  <a style="font-size: large;" class="nav-link text-info " aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item" style="margin-left: 2%; margin-right: 1%;">
                  <a style="font-size: large;" class="nav-link text-info " href="{{url('/project')}}">Project </a>
                </li>
                <li class="nav-item" style="margin-left: 2%; margin-right: 1%;">
                    <a style="font-size: large;" class="nav-link text-info " href="{{url('/service')}}">Services </a>
                  </li>
                  <li class="nav-item" style="margin-left: 2%; margin-right: 1%;">
                    <a style="font-size: large;" class="nav-link text-info " href="{{url('/about')}}">About </a>
                  </li>
                  <li class="nav-item" style="margin-left: 2%; margin-right: 1%;">
                    <a style="font-size: large;" class="nav-link text-info " href="{{url('/blog')}}">Blog</a>
                  </li>
                  <li class="nav-item" style="margin-left: 2%; margin-right: 1%;">
                    <a style="font-size: large;" class="nav-link text-info " href="{{url('/contact')}}">Contact</a>
                  </li>
                 
                
              </ul>
            </div>
            <!-- Right elements -->
              <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="link-secondary me-3" href="{{url('/addToCart')}}">
                  <i class="fas fa-shopping-cart fa-2xl"></i>
                </a>

                <!-- Notifications -->
                <div class="dropdown">
                  <a
                    class="link-secondary me-3 dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="fas fa-bell fa-2xl"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                      <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                  <a
                    class="dropdown-toggle d-flex align-items-center hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuAvatar"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                      class="rounded-circle"
                      height="35"
                      alt="Black and White Portrait of a Man"
                      loading="lazy"
                    />
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuAvatar"
                  >
                    <li>
                      <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            <!-- Right elements -->
          </div>
        </nav>
        <!-- Navbar -->
</header>