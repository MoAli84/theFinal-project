<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i Track</title>
    <base href="{{ \URL::to('/') }}">

    {{-- <link rel="stylesheet" href="../../public/css/login.css"> --}}
    <link rel="stylesheet" href="vendors/css/login.css">

    <link rel="shortcut icon" href="public/images/aaa.jpeg" />
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="image">
            <h1>Welcome To Our Website<span> i Track </span></h1>
            <h6>Doctor Login</h6>
        </div>
        <div class="content">
            <form action="{{ url('doctor/dologin') }}" method="post">
                @csrf
                @method('post')

                

                
                <h1>Login</h1>
                <div class="form-group">
                    <label for="">UserName</label>
                    <br>

                    @if($errors->has('username'))
                    <div class="error" style="color: rgb(239, 13, 134)"><b><i>{{ $errors->first('username') }}</i></b></div>
                  @endif
                    <input type="text" class="form-control" name="username" id="txt" aria-describedby="helpId"
                        placeholder="UserName">

                      
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <br>
                    @if($errors->has('password'))
                    <div class="error" style="color: rgb(239, 13, 134)"><b><i>{{ $errors->first('password') }}</i></b></div>
                  @endif
                    <input type="password" class="form-control" name="password" id="txt" placeholder="Password">
                </div>
                <a class="fp" href="#">Forgot Password?</a>
                <br>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
