
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them</title>
</head>
<body>
@if(isset($_SESSION['errors'])
    && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $item)
            <li>{{$item}}</li>

        @endforeach
    </ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$__SESSION['success']}}</span>
@endif
<form action="{{route('update/'.$listCate->id)}}" method="POST">
    <label>Name</label>
    <input type="text" name="name" value="{{$listCate->name}}">
    <button type="submit" name="sua" value="gui">Gửi</button>
</form>

</body>
</html>