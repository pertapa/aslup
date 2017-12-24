<body>
<h1>Kirim SMS</h1>
 
<form method="post" action="run.php">
Nomor HP Tujuan<br>
<input type="text" name="nohp"><br><br>
Isi SMS<br>
<textarea name="sms"></textarea><br><br>
Format SMS<br>
<input type="radio" name="format" value="flash"> Flash SMS <br>
<input type="radio" name="format" value="normal"> Normal SMS <br><br>
<input type="submit" name="submit" value="Kirim SMS">
</form>
</body>