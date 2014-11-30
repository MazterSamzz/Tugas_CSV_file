<?php
$file= fopen("Database Dokter.txt", "a+") or die("Unable to open file!");
$txt = $_POST["email"]."; ".$_POST["nid"]."; ".$_POST["username"]."; ".$_POST["password"]."; ".$_POST["tempat_praktek"]."\n";
fwrite($file, $txt);
fclose($file);
?>
<script>
	alert("Akun telah diregister");
	top.location='register_form.html';
</script>