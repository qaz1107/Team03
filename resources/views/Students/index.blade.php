<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有學生資料</title>
</head>
<body>
<h1>顯示所有班級資料</h1>
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
    </tr>
    @foreach($Students as $Student)
        <tr>
            <td>{{$Students->id}}</td>
            <td>{{$Students->student_id}}</td>
            <td>{{$Students->seat_number}}</td>
            <td>{{$Students->name}}</td>
            <td>{{$Students->gender}}</td>
            <td>{{$Students->cid}}</td>
            <td>{{$Students->graduation_year}}</td>
            <td>{{$Students->start_year}}</td>
            <td>{{$Students->seat}}</td>
            <td>{{$Students->country}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
