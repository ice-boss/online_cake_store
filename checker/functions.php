<?php
function check_sessionin(){
	if(!isset($_SESSION['users_id']))
		{
			header('location:?site=account-setup');
		}
}
function check_sessionout(){
	if(isset($_SESSION['users_id']))
		{
			header('location:?site=home');
		}
}