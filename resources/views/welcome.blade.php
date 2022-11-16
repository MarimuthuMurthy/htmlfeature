<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
    <div class="form-control">
        <form action="{{route('first.showpage')}}" method="post">
            @csrf
            <input type="text" name="name" placeholder="enter name here">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
