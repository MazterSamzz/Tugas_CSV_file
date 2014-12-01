<?php
$file= fopen("Database Dokter.txt", "a+") or die("Unable to open file!");
$txt = $_POST["email"]."\n".$_POST["nid"]."\n".$_POST["username"]."\n".$_POST["password"]."\n".$_POST["tempat_praktek"]."\n";
fwrite($file, $txt);
fclose($file);
?>
<script>
	alert("Akun telah diregister");
	top.location='register_form.html';
</script>