<html>
<head>
<title>Contoh Update Data</title>
</head>
<body>
<?php
include_once("db_connect.php");
$id = 3;
$delete = mysql_query("delete from tamu where id = '$id'");
echo "<br><br>";
if($delete)
	{echo "Berhasil menghapus data tamu dengan id $id";}
else
	{echo "Gagal menghapus data";}
?>
</body>