<?php
if(isset($_POST['submit'])){
	
	$name = array("alexwawo", "maria", "johndoe", "janedoe", "nathan");
	$minimum = 5;
	$maximum = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username) < 5){
		echo "Username harus memiliki panjang 5 atau lebih";
	}
	
	if(strlen($username) > $maximum){
		echo "Username tidak boleh lebih panjang dari 10";
	}
	if(!in_array($username, $name)){
		echo "Maaf, akses ditolak";
	}else{
		echo "Selamat datang";
	}
}
?>