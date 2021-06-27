<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<style>
*{
    margin: 0;
    padding: 0;


}
.container{
    margin-top: 100px;
    margin-left: 550px;
    height:550px;
    width:25%;
    background-color:#0b2c4d;
}

.headline{
    background-color: rgb(5, 5, 5);
    height: 80px;
    color:white;
}

h4{
    text-align: center;
    padding: 18px;
    font-size: 28px;
}

</style>
</head>
<body>
    <div class="container">
        <div class="headline">
            <h4>Register | Custom Auth</h4>
            <br>
            <form action="{{ route('auth.save') }}" method="post">
                @csrf

                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif

                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
                @endif

                <div class="form-group">
                    <label style="color: rgb(255, 253, 253);font-weight:bold;margin-left:10px;">Name</label>
                    <br>
                     <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>
                <br>

                <div class="form-group">
                    <label style="color: rgb(255, 253, 253);font-weight:bold;margin-left:10px;">Email</label>
                    <br>
                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email Address" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <br>
                
                <div class="form-group">
                    <label style="color: rgb(255, 253, 253);font-weight:bold;margin-left:10px;">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <br>
                <button type="submit" style="margin-left:5px;" class="btn btn-block btn-primary">Sign Up</button>
                <br>
                <br>
                <a href="{{ route('auth.login') }}">I already have an account, Sign In</a>

            </form>
        </div>
    </div>
</body>
</html>