<?php
include("./dbcon.php");

$no = $_POST["no"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$juso = $_POST["juso"];

$sql = "UPDATE member SET schoolname='$name', schooltel='$tel', schooljuso='$juso' WHERE mno=".$no;

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">회원입력</a> 
<a href="./list.php">회원목록</a>
</div>

