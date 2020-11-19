<?php
session_start();
require("dbconnect.php");

if (isset($_GET['m'])) {
  $msg = '<font color="red">' . $_GET['m'] . "</font>";
} else {
  $msg = "Good Morning";
}

// $sql = "select * from todo where status = 0;";
$sql = "select * from apply;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>
</head>

<body>

<p>Student !! </p>
<hr />
  <?php echo $msg; ?><hr />

<table width="200" border="1">
  <tr>
    <td>name</td>
    <td>id</td>
    <td>dad</td>
    <td>mom</td>
    <td>species</td>
    <td>submit</td>
  </tr>
<?php
while ( $rs=mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $rs['name'] . "</td>";
  echo "<td>{$rs['id']}</td>";
  echo "<td>" , $rs['dad'], "</td>";
  echo "<td>" . $rs['mom'] ;
  echo "<td>" . $rs['species'] ;
//  echo "<td><a href='todoSet.php?id={$rs['id']}'>Done</a>" . "</td>";
}
?>
</table>

</body>
</html>
