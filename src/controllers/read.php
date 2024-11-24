<?php

function getAllRecord($conn) {
	$result = mysqli_query($conn, "SELECT * FROM tbl_crud");
	return $result;
}

function getRecordById($conn, $id) {
	$result = mysqli_query($conn, "SELECT * FROM tbl_crud where id = '$id'");
	return $result;
}