<html>
<head>
    <meta charset="UTF-8"/>
    <title>修改單一班級資料</title>
</head>
<body>
<h1>修改單一班級資料</h1>
<form method="post" action="/classes/{{ $Class->id }}">
    @csrf
    @method("PUT")
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{$Class->id}}</td>
    </tr>
    <tr>
        <td>系別</td>
        <td>
            @if($Class->department=='文')
            <input type="radio" name="department" value="文" checked/>
            @else
            <input type="radio" name="department" value="文"/>
            @endif
            <label for="department">文</label>
            @if($Class->department=='理')
            <input type="radio" name="department" value="理" checked/>
            @else
            <input type="radio" name="department" value="理"/>
            @endif
            <label for="department">理</label>
        </td>
    </tr>
    <tr>
        <td>班級名稱</td>
        <td><input type="text" name="classname" value="{{$Class->classname}}"/></td>
    </tr>
    <tr>
        <td>年級</td>
        <td><input type="text" name="grade" value="{{$Class->grade}}"/></td>
    </tr>
    <tr>
        <td>教室</td>
        <td><input type="text" name="classroom" value="{{$Class->classroom}}"/></td>
    </tr>
    <tr>
        <td>班導</td>
        <td><input type="text" name="teacher" value="{{$Class->teacher}}"/></td>
    </tr>
</table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
