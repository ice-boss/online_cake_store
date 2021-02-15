<?php
$conn = mysqli_connect('localhost', 'root', '', 'partyp');
	/* check connection */
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}