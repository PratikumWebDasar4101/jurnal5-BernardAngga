<?php
$kotor = $_POST["Komentar"];

if(strlen($kotor) < 5){
	echo "Komentar harus lebih dari 5 karakter";
	echo "<br><a href='kotor.php'>Input Ulang</a>";
}else{
echo $kotor . "<br><br>";
echo "Panjang Komentar : " . strlen($kotor);
}
?>