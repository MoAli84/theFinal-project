<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stuff Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


</head>

<body>


    <div class="container"  style="width: 70%;">

        <div class="jumbotron">
            <h1 class="display-4">Register</h1>
            <div id="emailHelp" class="form-text">Create roles' Accounts.</div>
            <hr class="my-4">
            <a class="btn btn-primary btn-lg" href="{{ url('admin/index/staff') }}" role="button">Back</a>
        </div>
        <form action="{{ url('admin/store/accounts') }}" method="POST">
            @csrf
            @method('post')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif --}}

            <div class="mb-2">
                <label for="example1" class="form-label">fullName</label>
                <input type="text" class="form-control" name="fullName" value="{{ old('fullName') }}" style="width: 50%;" id="example1" >

            </div>

            <div class="form-group">
                <label for="exampleSelectStage"><b>Role Type</b></label>
                <select class="form-control" id="exampleSelectStage" name="roleId" style="width: 50%;">
                    @foreach ( $type as $typ )
                         <option value="{{ $typ->id }}"> {{ $typ->name }}</option>
                    @endforeach
                   
                    

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="username" value="{{ old('username') }}"
                    id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 50%;">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" style="width: 50%;">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" style="width: 50%;" id="phone" >
                <br><br>


                <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>


</body>

</html>
