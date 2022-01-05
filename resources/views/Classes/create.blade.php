<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增單一班級資料</title>
</head>
<body>
<h1>新增單一班級資料</h1>
<form method="post" action="{{ route('classes.store') }}">
    @csrf
<table border="1">
    <tr>
        <th>編號</th>
        <td><input type="text" name="id" value=""></td>
    </tr>
    <tr>
        <td>系別</td>
        <td>
            <input type="radio" name="department" value="文"/>
            <label for="department">文</label>
            <input type="radio" name="department" value="理"/>
            <label for="department">理</label>
        </td>
    </tr>
    <tr>
        <td>班級名稱</td>
        <td><input type="text" name="classname" value=""/></td>
    </tr>
    <tr>
        <td>年級</td>
        <td><input type="text" name="grade" value=""/></td>
    </tr>
    <tr>
        <td>教室</td>
        <td><input type="text" name="classroom" value=""/></td>
    </tr>
    <tr>
        <td>班導</td>
        <td><input type="text" name="teacher" value=""/></td>
    </tr>
</table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
