<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>
    .res{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .resistration{
        height: 100%;
        width: 400px;
        border: 2px solid green;
        border-radius: 10px;
        background-color: green;
        padding: 15px;
    }

  </style>
  <body>
   
<div class="container">
    <div class="row pt-5">
        <div class="col res pt-5">
            <div class="col-md-5 text-center text-white resistration pt-5 ">
            <form action="{{route('res-user')}}" method="POST">
                @csrf 
                <h3> Resistration</h3>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-success">{{ Session::get('fail') }}</div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                    <span>@error('name') {{$message}} @enderror </span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail2" class="form-labe2">Email </label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter your Email">
                    <span>@error('email') {{$message}} @enderror </span>
                </div>
              
                <div class="mb-3">
                    <label for="exampleInputPassword3" class="form-labe3">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword3" placeholder="Enter Your Password"  required>
                    <span>@error('password') {{$message}} @enderror </span>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/login" class="text-white"><small>alredy have an account login </small> </a>
                </form>
            
            </div>
        </div>
    </div>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>