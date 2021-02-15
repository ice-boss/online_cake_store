<?php
function test_input ($data){
	global $conn;
	        $data = mysqli_real_escape_string($conn, $data);
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}