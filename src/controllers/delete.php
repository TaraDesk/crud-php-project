<?php

require_once __DIR__ . '/../config/db_connection.php'; 

function deleteRecordById($conn, $id) {
	$result = mysqli_query($conn, "DELETE FROM tbl_crud where id = '$id'");
	
	if($result) {
        header("location: ../../index.php");
        exit;
    }
}

$id = $_GET['id'];

deleteRecordById($conn, $id);

