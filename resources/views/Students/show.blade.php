<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示單一學生資料</title>
</head>
<body>
<h1>顯示單一學生資料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <td>{{$Student->id}}</td>
    </tr>
    <tr>
        <th>學號</th>
        <td>{{$Student->student_id}}</td>
    </tr>
    <tr>
        <th>座號</th>
        <td>{{$Student->seat_number}}</td>
    </tr>
    <tr>
        <th>姓名</th>
        <td>{{$Student->name}}</td>
    </tr>
    <tr>
        <th>性別</th>
        <td>{{$Student->gender}}</td>
    </tr>
    <tr>
        <th>班級</th>
        <td>{{$Student->cid}}</td>
    </tr>
    <tr>
        <th>畢業年份</th>
        <td>{{$Student->graduation_year}}</td>
    </tr>
    <tr>
        <th>入學年份</th>
        <td>{{$Student->start_year}}</td>
    </tr>
    <tr>
        <th>座位</th>
        <td>{{$Student->seat}}</td>
    </tr>
    <tr>
        <th>出生地</th>
        <td>{{$Student->country}}</td>
    </tr>
</table>
</body>
</html>
