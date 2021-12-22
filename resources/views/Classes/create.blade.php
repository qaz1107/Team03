<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增單一班級資料</title>
</head>
<body>
<h1>新增單一班級資料</h1>
<form method="post" action="/classes">
<table border="1">
    <tr>
        <th>編號</th>
        <td><input type="text" name="id" value=""/></td>
    </tr>
    <tr>
        <th>系別</th>
        <td><input type="text" name="department" value=""/></td>
    </tr>
    <tr>
        <th>班級名稱</th>
        <td><input type="text" name="classname" value=""/></td>
    </tr>
    <tr>
        <th>年級</th>
        <td><input type="text" name="grade" value=""/></td>
    </tr>
    <tr>
        <th>教室</th>
        <td><input type="text" name="classroom" value=""/></td>
    </tr>
    <tr>
        <th>班導</th>
        <td><input type="text" name="teacher" value=""/></td>
    </tr>
</table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
