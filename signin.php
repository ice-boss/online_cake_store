<body class="fixed-bottom-padding">
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>

<div class="osahan-signin">
<div class="border-bottom p-3 d-flex align-items-center">
<a class="font-weight-bold text-success text-decoration-none" href="?site=account-setup"><i class="icofont-rounded-left back-page" onclick="back()"></i></a>
<a class="toggle ml-auto" href="?site=#"><i class="icofont-navigation-menu"></i></a>
</div>
<div class="p-3">
<h2 class="my-0">Welcome Back</h2>
<p class="small">Sign in to Continue.</p>
<form action="" method="post">
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>
<button type="submit" class="btn btn-success btn-lg rounded btn-block" name="signin">Sign in</button>
</form>
<p class="text-muted text-center small m-0 py-3">or</p>
<a href="?site=get_started" class="btn btn-dark btn-block rounded btn-lg btn-apple">
<i class="icofont-brand-apple mr-2"></i> Sign up with Apple
</a>
<a href="?site=get_started" class="btn btn-light btn-block rounded btn-lg btn-google">
<i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
</a>
</div>
</div>

<div class="osahan-fotter fixed-bottom">
<a href="?site=signup" class="btn btn-block btn-lg bg-white">Don't have an account? Sign up</a>
</div>
<?php
if (isset($_POST['signin'])) {

$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];

$result = mysqli_query($conn, "select * from users WHERE email = '$email'  AND password = '$password'");
$result16 = mysqli_fetch_array($result);
 
 if($result16 != "") {

$_SESSION["users_id"]= $result16['idp'];
echo " <script language='javascript' type='text/javascript'> location.href='?site=home' </script>" ;
}
else
{
echo "<script type='text/javascript'>alert('Invalid Credentials!!!!!')</script>" ;
}
}
?>