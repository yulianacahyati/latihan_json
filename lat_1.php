<?php 
$json_data=file_get_contents("data.json");
$obj = json_decode($json_data);
echo "<h2>Data</h2>";
echo "*-------------------------*"; echo "<br>";
echo "Nama: "; echo $obj->nama;
echo "<br>";
echo "Nim:"; echo $obj->nim;
echo "<br>";
echo "Alamat:"; echo $obj->alamat;
echo "<br>";
echo "No_HP	:"; echo $obj->nohp;
echo "<br>";
echo "Mata Kuliah :"; echo "<br>";
echo "1. "; echo $obj->matkul[0];
echo "<br>2. "; echo $obj->matkul[1];
echo "<br>3. "; echo $obj->matkul[2]; echo "<br>";

echo "*----------------------------*"

 
?>