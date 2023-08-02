<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <style>
   .login-form{
    border:2px solid green; 
    border-radius: 10px;
    padding:20px ;
    background-color: green;
    height: 100%;
    width: 400px;
   }
  </style>
  <body>

 <div class="container">
   <div class="row">
    <div style="display: flex; justify-content:center; align-items: center; margin-top:10%; " class="col text-center">
       <div class="col-md-6 login-form text-white">
          <form action="{{route('login-user')}}" method="POST">
            @csrf
                @if(Session::has('fail'))
                    <div class="alert alert-success">{{ Session::get('fail') }}</div>
                @endif
              <h3 class="text-center">LOGIN </h3>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="{{old('email')}}" placeholder="Enter your Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword2"  class="form-label">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter Your Password " id="exampleInputPassword2">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="/res" class="text-white"><small>or resistration</small> </a> 
            </form>
       </div>
     
    </div>
   </div>
 </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>