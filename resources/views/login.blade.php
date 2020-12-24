<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="text-center">
    <div class="text-left d-inline-block mt-4" style="width:32em; max-width:calc(100% - 1em);">
        @if ($errors->any())
        @foreach($errors->all() as $err)
        <div class="alert alert-danger" role="alert"><strong>{{$err}}</strong></div>
        @endforeach
        @endif
        <div class="card mb-4">
            <div class="card-header">
                Login
            </div>
            <form action="{{route("login")}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <label for="">Team Name</label>
                    <input type="text" class="form-control" name="name" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="">
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
