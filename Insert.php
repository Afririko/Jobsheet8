<html>
<body>
<?php
include_once("db_connect.php");
$insert=mysql_query("INSERT INTO tamu (id,nama,alamat,email,komentar)
		VALUES ( '2','Afririko Suprayatna','Kendal','riko_afri@yahoo.com','identitasku')");

if($insert)
{ 
echo"berhasil menyisipkan data pada tabel tamu";}
else
{echo"gagal penyisipan data";}
?>
</body>
</html>
