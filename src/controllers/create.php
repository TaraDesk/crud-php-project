<?php

function addRecord($conn, $first_name, $last_name, $email, $gender) {
	
	$length = 4;
	$alpha= substr(str_shuffle("QWERTYUIOPLKJHGFDSAZXCVBNM"),1,$length);
	$beta = substr(str_shuffle("1234567890"),1,$length);
	
	$id = "${alpha}-${beta}";

	$result = mysqli_query($conn, "INSERT INTO tbl_crud (`id`, `first_name`, `last_name`, `email`, `gender`) VALUES ('$id', '$first_name', '$last_name', '$email', '$gender')");

	return $result;
}