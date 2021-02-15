<?php
session_start();
error_reporting(1);
include 'checker/functions.php';
include 'checker/connect.php';
include 'checker/test_input.php';
$page = $_GET['site'];

$sess = $_SESSION["users_id"];
$result = mysqli_query($conn, "Select * from users WHERE idp = '$sess'");
$urow = mysqli_fetch_array($result);

switch ($page) {
	case 'canceled_order':
	case 'cart':
	case 'change_password':
	case 'checkout':
	case 'complete_order':
	case 'deactivate_account':
	case 'delivery_time':
	case 'edit_profile':
	case 'faq':
	case 'fresh_vegan':
	case 'get_started':
	case 'help_support':
	case 'help_ticket':
	case 'home':
	case 'landing':
	case 'listing':
	case 'my_account':
	case 'my_address':
	case 'notification':
	case 'order_address':
	case 'order_payment':
	case 'picks_today':
	case 'privacy':
	case 'product_details':
	case 'progress_order':
	case 'promo_details':
	case 'promos':
	case 'recommend':
	case 'refund_payment':
	case 'review':
	case 'search':
	case 'status_canceled':
	case 'status_complete':
	case 'status_onprocess':
	case 'successful':
	case 'terms&conditions':
	case 'terms_conditions':
	case 'verification':
		$js = "js";
		$session = check_sessionin();
		break;

	case 'account-setup':
	case 'signin':
	case 'signup':
	case 'signout':
		$js = "js";
		$session = check_sessionout();
		break;
	
	default:
		# code...
	$page = "index";
	$js = "js";
		break;
}
echo $session;
include 'checker/1.php';
//include 'checker/2.php';
include $page.'.php';
echo '<br><script type="text/javascript">
	function back(){
		window.history.back();
	}
</script><br>';

//include 'checker/3.php';
include 'checker/nav.php';
include 'checker/'.$js.'.php';
?>