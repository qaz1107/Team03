<html>
<head>
    <meta charset="UTF-8"/>
    <title>新增單一學生資料</title>
</head>
<body>
<h1>新增單一學生資料</h1>
<form method="post" action="/students">
    @csrf
<table border="1">
    <tr>
        <td>編號</td>
        <td><input type="text" name="id" value=""></td>
    </tr>
    <tr>
        <td>學號</td>
        <td><input type="text" name="student_id" value=""/></td>
    </tr>
    <tr>
        <td>座號</td>
        <td><input type="text" name="seat_number" value=""/></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="name" value=""/></td>
    </tr>
    <tr>
        <td>性別</td>
        <td><input type="radio" name="gender" value="F"/>
            <label for="gender">F</label>
            <input type="radio" name="gender" value="M"/>
            <label for="gender">M</label></td>
    </tr>
    <tr>
        <td>班級</td>
        <td><input type="text" name="cid" value=""/></td>
    </tr>
    <tr>
        <td>畢業年份</td>
        <td><input type="date" name="graduation_year" value=""/>
        </td>
    </tr>
    <tr>
        <td>入學年份</td>
        <td><input type="date" name="start_year" value=""/></td>
    </tr>
    <tr>
        <td>座位</td>
        <td><input type="text" name="seat" value=""/></td>
    </tr>
    <tr>
        <td>出生地</td>
        <td><input list="country" name="country" value=""/>
            <datalist id="country">
                <option value="基隆市"><option value="台北市"><option value="新北市"><option value="桃園市"><option value="新竹市">
                <option value="新竹縣"><option value="苗栗市"><option value="苗栗縣"><option value="台中市"><option value="彰化市">
                <option value="彰化縣"><option value="雲林縣"><option value="南投市"><option value="南投縣"><option value="嘉義市">
                <option value="嘉義縣"><option value="台南市"><option value="高雄市"><option value="屏東市"><option value="屏東縣">
                <option value="宜蘭市"><option value="花蓮市"><option value="花蓮縣"><option value="台東市"><option value="台東縣">
                <option value="澎湖縣"><option value="金門縣"><option value="連江縣"><option value="綠島"><option value="蘭嶼">
                <option value="馬祖"></datalist></td>
    </tr>
</table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>

