<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有班級資料</title>
</head>
<body>
<h1>顯示所有班級資料</h1>
<table border="1">
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach($Students as $Student)
        <tr>
            <td>{{$Students->}}</td>
            <td>{{$Students->}}</td>
            <td>{{$Students->}}</td>
            <td>{{$Students->}}</td>
            <td>{{$Students->}}</td>
            <td>{{$Students->}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
