<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà sản xuất</title>
</head>
<body>
    <h1>Danh sách nhà sản xuất</h1>

    <a href="{{route(nhasanxuats.create)}}">Thêm mới nhà sản xuất</a>
    <table>
        <thead>
            <tr>
                <th>Tên</th>
                <th>Logo</th>
                <th>Status</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nhasanxuats as $nhasanxuat)
            <tr>
                <td>{{$nhasanxuat->ten}}</td>
                <td> <img src="{{$nhasanxuat->logo}}" alt="Logo"></td>
                <td>{{$nhasanxuat->status}}</td>
                <td>{{$nhasanxuat->ten}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
