<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="card m-5">
        <div class="card-header clearfix">
            <form class="float-right" action="{{route("logout")}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <div class="card-body">
            <h4 class="card-title">Dashboard</h4>
        </div>
    </div>
    <div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 65vh">
        @foreach ($team->members as $member)
        @if ($member->type=="leader")
            <h2>Leader</h2>
        @else
            <h2>Member</h2>
        @endif
        <h4>{{($member->fullname)}}</h4>
        <h4>{{($member->email)}}</h4>
        <h4>{{($member->place_of_birth)}}</h4>
        <h4>{{($member->date_of_birth)}}</h4>
        <h4>{{($member->lineid)}}</h4>
        <h4>{{($member->whatsapp)}}</h4>
        <h4>{{($member->git_account)}}</h4>
        <p>
            <embed src="{{asset($member->identity)}}" width="300" height="200">
            <embed src="{{asset($member->cv)}}" width="300" height="200">
        </p>
        @endforeach
        </div>
    </div>

    @if(count($team->members)<=3)
    <div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 83vh">
            <form class="col-lg6" action="{{route('add_member', $team->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Full Name</label>
                <input class="form-control" name="fullname" type="text" placeholder="Full Name">
                @error('fullname') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" name="email" type="text" placeholder="Email">
                @error('email') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Place of Birth</label>
                <input class="form-control" name="place_of_birth" type="text" placeholder="Birthplace">
                @error('place_of_birth') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Date of Birth</label>
                <input class="form-control" name="date_of_birth" type="date" placeholder="Birth Date">
                @error('date_of_birth') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Line ID</label>
                <input class="form-control" name="lineid" type="text" placeholder="Line ID">
                @error('lineid') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Whatsapp Number</label>
                <input class="form-control" name="whatsapp" type="text" placeholder="Whatsapp">
                @error('whatsapp') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Git ID</label>
                <input class="form-control" name="git_account" type="text" placeholder="Git ID">
                @error('git_account') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Identity</label>
                <input class="form-control-file" name="identity" type="file" placeholder="">
                @error('identity') <span>{{$message}}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CV</label>
                <input class="form-control-file" name="cv" type="file" placeholder="">
                @error('cv') <span>{{$message}}</span> @enderror
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endif
</body>
</html>
