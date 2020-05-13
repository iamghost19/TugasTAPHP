<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Menentukan fstop lensa</h1>
<p>perhitungan menggunakan panjang fokal lensa dan diameter dari lensa</p>
<form id="form1" name="form1" method="post" action="fstopperhitungan.php">
  <table width="40%" border="1">
    <tbody>
      <tr>
        <td width="41%">masukkan fokal lensa</td>
        <td width="59%"><label for="textfield">:</label>
        <input type="text" name="focal" id="textfield"></td>
      </tr>
      <tr>
        <td>masukkan diameter aperture</td>
        <td><label for="textfield2">:</label>
        <input type="text" name="aperture" id="textfield2"></td>
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
        $aperture = $_POST["aperture"];
        $hasilfstop = $foto->fstopperhitungan($focal, $aperture);
        
	    echo "fstop dari lensa tersebut adalah: $hasilfstop";
	  }
    ?>
<p>&nbsp;</p>
</body>
</html>