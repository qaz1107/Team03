<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增單一學生資料</title>
</head>
<body>
<h1>新增單一學生資料</h1>
<form method="post" action="/students">
<table border="1">
    <tr>
        <th>編號</th>
        <td><input type="text" name="id" value=""></td>
</tr>
<tr>
    <th>學號</th>
    <td><input type="text" name="student_id" value=""></td>
</tr>
<tr>
    <th>座號</th>
    <td><input type="text" name="seat_number" value=""></td>
</tr>
<tr>
    <th>姓名</th>
    <td><input type="text" name="name" value=""></td>
</tr>
<tr>
    <th>性別</th>
    <td><input type="text" name="gender" value=""></td>
</tr>
<tr>
    <th>班級</th>
    <td><input type="text" name="cid" value=""></td>
</tr>
<tr>
    <th>畢業年份</th>
    <td><input type="text" name="graduation_year" value=""></td>
</tr>
<tr>
    <th>入學年份</th>
    <td><input type="text" name="start_year" value=""></td>
</tr>
<tr>
    <th>座位</th>
    <td><input type="text" name="seat" value=""></td>
</tr>
<tr>
    <th>出生地</th>
    <td><input type="text" name="country" value=""></td>
</tr>
</table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>

