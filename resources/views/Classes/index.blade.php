<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有班級資料</title>
</head>
<body>
<h1>顯示所有班級資料</h1>
<form><a href="classes/create">新增單一班級資料</a></form>
<table border="1">
    <tr>
        <th>編號</th>
        <th>系別</th>
        <th>班級名稱</th>
        <th>年級</th>
        <th>教室</th>
        <th>班導</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($Classes as $Class)
    <tr>
        <td>{{$Class->id}}</td>
        <td>{{$Class->department}}</td>
        <td>{{$Class->classname}}</td>
        <td>{{$Class->grade}}</td>
        <td>{{$Class->classroom}}</td>
        <td>{{$Class->teacher}}</td>
        <td><a href="classes/{{$Class->id}}">個班</a></td>
        <td><a href="classes/{{$Class->id}}/edit">修改</a></td>
        <td>
            <form method="post" action="classes/{{$Class->id}}">
                @csrf
                @method("delete")
                <input type="submit" value="刪除"/>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
