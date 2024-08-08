@if(isset($_SESSION['errors']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errors'] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$__SESSION['success']}}</span>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Thao tác</th>
        </tr>
       
        <?php foreach ($data as $item) {?>
           
        <tr>
            <td><?php echo $item->id?></td>
            <td><?php echo $item->name?></td>
            <td><?php echo $item->status?></td>
            <td>
                <button><a href="{{route('edit/'.$item->id)}}">Sửa</a></button>
                <button><a href="{{route('destroy/'.$item->id)}}">Xóa</a></button>
            </td>
        </tr>

        <?php } ?>
    </table>
    
</body>
</html>