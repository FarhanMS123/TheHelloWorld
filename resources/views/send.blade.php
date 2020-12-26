<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 83vh">
        <form class="col-lg6" action="{{route('send')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input class="form-control" name="name" type="text" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input class="form-control" name="email" type="text" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Subject</label>
            <input class="form-control" name="subject" type="text" placeholder="Subject">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Text</label>
            <textarea class="form-control" name="text" id="" cols="30" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>
