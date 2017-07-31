<html>
<head>
<title>Contoh Menyisipkan Data</title>
</head>
<body>
<?php
include_once("db_connect.php");
$insert = mysql_query("INSERT INTO Tamu (Id, Nama, Alamat, Email,Komentar)
		VALUES ('2','Yayuk Kurniawati','jl. Soekarno Hatta 66 Kendal','Yayuk.k@yahoo.com','STEKOM Kendal ')");
echo "<br><br>";
if($insert)
	{echo "Berhasil menyisipkan data pada tabel tamu";}
else
	{echo "Gagal menyisipkan data";}
?>
</body>
</html>