<?php
/*session_start();
require("dbconnect.php");
if (isset($_GET['m'])){//isset確認有無message傳過來
    $msg=$_GET['m'];
}else{
    $msg="Good morning";
}
$sql = "select * from todo where status = 0;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");//執行SQL指令
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>
</head>

<body>
<p>Student List !! </p>
<hr />
<p></p>
<table width="200" border="1">
<tr>
    <td>id</td>
    <td>導師訪視說明</td>
    <td>導師簽章</td>
</tr>
<?php
/*while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";//echo 大約為 print
	echo "<td>" . $rs['title'] ."</td>";
	echo "<td>" , $rs['content'], "</td>";
}
*/
?>
</table>
</body>
</html>