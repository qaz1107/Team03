<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有班級資料</title>
</head>
<body>
<h1>顯示所有班級資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>系別</th>
        <th>班級名稱</th>
        <th>年級</th>
        <th>教室</th>
        <th>班導</th>
    </tr>
    @foreach($Classes as $Class)
    <tr>
        <td>{{$Class->id}}</td>
        <td>{{$Class->department}}</td>
        <td>{{$Class->classname}}</td>
        <td>{{$Class->grade}}</td>
        <td>{{$Class->classroom}}</td>
        <td>{{$Class->teacher}}</td>
        <td><a href="students/{{$Class->id}}">個班</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>
