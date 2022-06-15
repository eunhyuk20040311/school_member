<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학생 관리 입력</title>
</head>
<body>
<form action="inputok.php" method="post">
<div>
학교 이름<input type="text" name="name">
</div>
<div>
학교 연락처<input type="text" name="tel"><br>
</div>
<div>
학교 주소
<input type="radio" name="juso" value="경기도 광주">경기도 광주
<input type="radio" name="juso" value="경기도 성남">경기도 성남
</div>
<div>
<input type="submit">
</div>
</form>

</body>
</html>