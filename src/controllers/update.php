<?php

function updateRecord($conn, $id, $first_name, $last_name, $email, $gender) {

	$result = mysqli_query($conn, "UPDATE tbl_crud SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email', `gender` = '$gender' WHERE `id` = '$id'");
	return $result;
}