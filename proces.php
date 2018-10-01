<?php
$nama = $_POST["Nama"];
$nim = $_POST["NIM"];
$email = $_POST["Email"];
$inputulang = "<br><a href='pendaftaran.php'>Input Ulang</a>";
$br = "<br>";


if(strlen($nama) > 25){
	echo "Nama harus terdiri dari 25 karakter";
	echo $inputulang;
	echo $br;
}
if(!is_numeric($nim) || strlen((string)$nim) > 10){
	echo "NIM tidak boleh lebih dari 10 digit dan NIM harus angka.";
	echo $inputulang;
	echo $br;
}
if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)){
	echo "Format email salah";
	echo $inputulang;
	echo $br;
}else{
	header("Location: kotor.php");
}
?>