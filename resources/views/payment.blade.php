<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($team->payment==NULL)
    <div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 83vh">
        <form class="col-lg6" action="{{route('pay', $team->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="" class="form-label">Payment</label>
            <input class="form-control-file" name="payment" type="file" placeholder="">
            @error('payment') <span>{{$message}}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>
    </div>
    @else
    <p>
        <embed src="{{asset($team->payment)}}" width="300" height="200">
    </p>
    @endif
</body>
</html>
