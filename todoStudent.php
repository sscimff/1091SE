<?php
session_start();
require("dbconnect.php");
if (isset($_GET['m'])){//isset確認有無message傳過來
    $msg=$_GET['m'];
}else{
    $msg="Good morning";
}
$sql = "select * from todo where status = 0;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");//執行SQL指令

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>
</head>

<body>
<p>Student</p>
<hr />
<p></p>
    學生姓名<br>
    學生學號<br>
    父親姓名<br>
    母親姓名<br>
    申請種類<br>
    導師訪視說明<br>
    導師簽章<br>
    秘書審核結果<br>
    秘書審查意見<br>
    秘書簽章<br>
    校長簽核<br>
<?php
/*while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['id'] . "</td>";//echo 大約為 print
	echo "<td>" . $rs['t_text'] ."</td>";
	echo "<td>" , $rs['t_sign'], "</td>";
    echo "<td>" , $rs['s_result'], "</td>";
    echo "<td>" , $rs['s_sug'], "</td>";
    echo "<td>" , $rs['s_sign'], "</td>";
    echo "<td>" , $rs['p_sign'], "</td>";
}*/

?>
</table>
</body>
</html>