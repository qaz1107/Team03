<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改單一學生資料</title>
</head>
<body>
<h1>修改單一學生資料</h1>
<form method="post" action="/students/{{$Student->id}}">
    @csrf
    @method("put")
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$Student->id}}</td>
    </tr>
    <tr>
        <td>學號</td>
        <td><input type="text" name="student_id" value="{{$Student->student_id}}"/></td>
    </tr>
    <tr>
        <td>座號</td>
        <td><input type="text" name="seat_number" value="{{$Student->seat_number}}"/></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="name" value="{{$Student->name}}"/></td>
    </tr>
    <tr>
        <td>性別</td>
        <td><input type="text" name="gender" value="{{$Student->gender}}"/></td>
    </tr>
    <tr>
        <td>班級</td>
        <td><input type="text" name="cid" value="{{$Student->cid}}"/></td>
    </tr>
    <tr>
        <td>畢業年份</td>
        <td><input type="text" name="graduation_year" value="{{$Student->graduation_year}}"/></td>
    </tr>
    <tr>
        <td>入學年份</td>
        <td><input type="text" name="start_year" value="{{$Student->start_year}}"/></td>
    </tr>
    <tr>
        <td>座位</td>
        <td><input type="text" name="seat" value="{{$Student->seat}}"/></td>
    </tr>
    <tr>
        <td>出生地</td>
        <td><input type="text" name="country" value="{{$Student->country}}"/></td>
    </tr>
</table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
