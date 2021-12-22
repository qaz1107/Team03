<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有學生資料</title>
</head>
<body>
<h1>顯示所有學生資料</h1>
<a href="{{route('classes.index') }}">顯示所有班級資料</a>
<a href="{{route('students.create') }}">新增單一學生資料</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>學號</th>
        <th>座號</th>
        <th>姓名</th>
        <th>性別</th>
        <th>班級</th>
        <th>畢業年份</th>
        <th>入學年份</th>
        <th>座位</th>
        <th>出生地</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($Students as $Student)
        <tr>
            <td>{{$Student->id}}</td>
            <td>{{$Student->student_id}}</td>
            <td>{{$Student->seat_number}}</td>
            <td>{{$Student->name}}</td>
            <td>{{$Student->gender}}</td>
            <td>{{$Student->cid}}</td>
            <td>{{$Student->graduation_year}}</td>
            <td>{{$Student->start_year}}</td>
            <td>{{$Student->seat}}</td>
            <td>{{$Student->country}}</td>
            <td><a href="students/{{$Student->id}}">詳細</a></td>
            <td><a href="students/{{$Student->id}}/edit">修改</a></td>
            <td>
                <form method="post" action="students/{{$Student->id}}">
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
