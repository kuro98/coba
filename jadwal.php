<html>
<head><title>Jadwal</title></head>
<body bgcolor=grey>
<table border=1 align=center>
<font face=Times New Roman Color=white size=6><br><br><br>
<?php
$hari=date("w");
echo "<center>Jadwal Pelajaran Hari Ini";

if($hari==1){
echo "<tr>
<td><font face=Calibri size=12 Color=red>Hari Senin</font></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>SK-SO</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Robotika</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>PKN</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Fisika</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Sejarah</font></center></td>
</tr><br>"; 
}
else if($hari==2){
echo "<tr>
<td><font face=Calibri size=12 Color=red>Hari Selasa</font></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>PK</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Matematika</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>B.inggris</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Seni Budaya</font></center></td>
</tr><br>"; 
}
else if($hari==3){
echo "<tr>
<td><font face=Calibri size=12 Color=red>Hari Rabu</font></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>SD</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Penjas</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>Agama</font></center></td>
</tr><br>"; 
}
else if($hari==4){
echo "<tr>
<td><font face=Calibri size=12 Color=red>Hari Kamis</font></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>JD</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>B.Indonesia</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>KWU</font></center></td>
</tr><br>";
}
else if($hari==5){
echo "<tr>
<td><font face=Calibri size=12 Color=red>Hari Jum'at</font></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>PD-PW</font></center></td>
</tr>
<tr>
<td><center><font face=Calibri size=6>B.sunda</font></center></td>
</tr><br>";
}
?>

</table>
</body>
</html>
