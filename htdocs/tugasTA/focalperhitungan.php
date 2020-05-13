<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Menentukan focal length lensa</h1>
<p>perhitungan digunakan untuk menentukan panjang fokal lensa yang sama dengan kamera full frame</p>
<p>perhitungan menggunakan panjang focal lensa dan crop factor kamera</p>
<p>daftar crop factor yang tersedia</p>
<ol>
  <li>aps-c Sony, Fuji, Nikon: 1.5x</li>
  <li>aps-c Canon: 1.6x</li>
  <li>micro four-third: 2x</li>
</ol>
<form id="form1" name="form1" method="post" action="focalperhitungan.php">
  <table width="50%" border="1">
    <tbody>
      <tr>
        <td width="23%">panjang fokal</td>
        <td width="77%"><label for="textfield">:</label>
        <input type="text" name="focal" id="textfield"></td>
      </tr>
      <tr>
        <td>crop factor</td>
        <td><label for="select">:</label>
          <select name="crop" id="crop">
            <option value="0"></option>
            <option value="1.6">apsc cannon</option>
            <option value="1.5">apsc </option>
            <option value="2">micro four-third</option>
        </select></td>
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
        $crop = $_POST["crop"];
        $hasilfocal = $foto->focalperhitungan($focal, $crop);
        
	    echo "focal dari lensa tersebut adalah: $hasilfocal";
	  }
    ?>
<p>&nbsp;</p>
</body>
</html>