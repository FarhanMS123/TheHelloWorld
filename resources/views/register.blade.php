<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="text-center pt-4">
    <form class="text-left d-inline-block" style="width:32em; max-width:calc(100% - 1em);" action="{{route("register")}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        @foreach($errors->all() as $err)
        <div class="alert alert-danger" role="alert"><strong>{{$err}}</strong></div>
        @endforeach
        @endif
        <div class="card shadow-sm mb-4">
            <div class="card-header">
                Team Info
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label>Team Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Are you?</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="type" id="" value="binusian" checked> Binusian
                        </label>
                        <label class="form-check-label ml-4">
                            <input type="radio" class="form-check-input" name="type" id="" value="non-binusian" checked> Non-Binusian
                        </label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" name="password" id="" placeholder="">
                </div>
            </div>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-body clearfix">
                <button type="submit" class="btn btn-primary float-right">Register</button>
            </div>
        </div>
    </form>
</body>
</html>
