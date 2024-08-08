
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
    <form action="{{route('store')}}" method="POST">
        <label>Name</label>
        <input type="text" name="name">

        <label>year_of_birth</label>
        <input type="text" name="year_of_birth">

        <label>phone_number</label>
        <input type="text" name="phone_number">

        <button type="submit" name="btn-submit" value="gui">Them</button>
    </form>
    
</body>
</html>