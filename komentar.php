<!doctype html>
<head><title>FORM</title></head>
<body>
<form method=POST action=do_komentar.php>
nama: <input type=text name=nama><br>
email: <input type=text name=email><br>
jurusan:<br>
<input type=radio name=jurusan value=rpl>RPL
<input type=radio name=jurusan value=tkj>TKJ
<input type=radio name=jurusan value=mm>MM<br>
Hobi:<br>
<input type=checkbox name=pilihan1 value=mancing>mancing
<input type=checkbox name=pilihan2 value=masak>masak
<input type=checkbox name=pilihan3 value=makan>makan<br>
<select name=pekerjaan>
<option value=Pelajar>Pelajar
<option value=Guru>Guru
<option value=Pegawai>Pegawai
</select><br>
<textarea name=komentar rows=3 cols=20></textarea><br>
<input type=submit value=proses>
</form>
</body>
</html>