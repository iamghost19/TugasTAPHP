<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Menentukan Shutter speed dari Reciprocal Rule</h1>
<p>perhitungan digunakan untuk menentukan shutter speed adari reciprocal rule</p>
<p>menggunakan panjang focal lensa</p>
<form id="form1" name="form1" method="post" action="shutterperhitungan.php">
  <table width="48%" border="1">
    <tbody>
      <tr>
        <td width="30%">panjang fokal</td>
        <td width="70%"><label for="textfield">:</label>
        <input type="text" name="focal" id="textfield"></td>
      </tr>
    </tbody>
  </table>
  <p>
    <input type="submit" name="submit" id="submit" value="kalkulasikan">
  </p>
</form>
<?php
include("fotografi.php");
$foto = new fotografi();
	  if($_POST['submit']=='kalkulasikan'){
        $focal = $_POST["focal"];
        $hasilshutter = $foto->shutterperhitungan($focal);
        
	    echo "shutter yang diperlukan adalah: $hasilshutter s";
	  }
    ?>
<p>&nbsp;</p>
</body>
</html>