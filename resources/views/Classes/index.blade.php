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
        <td>{{$Classes->id}}</td>
        <td>{{$Classes->department}}</td>
        <td>{{$Classes->classname}}</td>
        <td>{{$Classes->grade}}</td>
        <td>{{$Classes->classroom}}</td>
        <td>{{$Classes->teacher}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
