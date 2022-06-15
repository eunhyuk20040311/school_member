<?php
    include("./dbcon.php");

    $no = $_GET["no"];

$sql = "SELECT * FROM member where mno=".$no;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $nameprt = $row["schoolname"]; 
    $telprt =$row["schooltel"];
    $jusoprt = $row["schooljuso"];
    


  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학생정보 재설정</title>
</head>
<body>
<form action="updateok.php" method="post">
<input type="hidden" name="no" value="<?php echo $no; ?>">    
<div>
학교 이름<input type="text" name="name" value='<?php echo $nameprt; ?>'>
</div>
<div>
학교 연락처
<input type="text" name="tel" value="<?php echo $telprt; ?>">
</div>
<div>
학교 주소
<input type="radio" name="juso" value="경기도 광주" <?php if($jusoprt =="경기도 광주") echo "checked";?> >경기도 광주
<input type="radio" name="juso" value="경기도 성남" <?php if($jusoprt =="경기도 성남") echo "checked";?>  >경기도 성남
<div>
<input type="submit" value="수정">
</div>
</form>

</body>
</html>