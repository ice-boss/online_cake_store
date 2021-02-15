<body class="fixed-bottom-padding">
<div class="theme-switch-wrapper">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox" />
<div class="slider round"></div>
<i class="icofont-moon"></i>
</label>
<em>Enable Dark Mode!</em>
</div>

<div class="osahan-signup">
<div class="border-bottom p-3 d-flex align-items-center">
<a class="font-weight-bold text-success text-decoration-none" href="#" onclick="back()"><i class="icofont-rounded-left back-page" onclick="back()"></i></a>
<a class="toggle ml-auto" href="#"><i class="icofont-navigation-menu"></i></a>
</div>
<div class="p-3">
<h2 class="my-0">Let's get started</h2>
<p>Create account to see our top picks for you!</p>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="Profilepic">Profile Picture</label>
<input placeholder="Enter Name" type="file" class="form-control" id="Profilepic" name="file" aria-describedby="emailHelp">
</div>
<div class="form-group">
<label for="exampleInputName1">Name</label>
<input placeholder="Enter Name" type="text" class="form-control" id="exampleInputName1" name="name" aria-describedby="emailHelp">
</div>
<div class="form-group">
<label for="exampleInputNumber1">Phone Number</label>
<input placeholder="Enter Phone Number" type="number" class="form-control" id="exampleInputNumber1" name="phone"  aria-describedby="emailHelp">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1" name="password" >
</div>
<button type="submit" class="btn btn-success rounded btn-lg btn-block" name="signup">Create Account</button>
</form>
<p class="text-muted text-center small py-2 m-0">or</p>
<a href="?site=get_started" class="btn btn-dark btn-block rounded btn-lg btn-apple">
<i class="icofont-brand-apple mr-2"></i> Sign up with Apple
</a>
<a href="?site=get_started" class="btn btn-light btn-block rounded btn-lg btn-google">
<i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
</a>
</div>
</div>

<div class="osahan-fotter fixed-bottom">
<a href="?site=signin" class="btn btn-block btn-lg bg-white">Already have an account? Sign in</a>
</div>
<?php
if (isset($_POST['signup'])) {
$targetDir = "img/profile/";
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['file']['tmp_name'])) {
if(move_uploaded_file($_FILES['file']['tmp_name'],"$targetDir/".$_FILES['file']['name'])) {
$profile = $_FILES['file']['name'];
}
}  
}
$name = test_input($_POST['name']);
$email = test_input($_POST['email']);
$phone = test_input($_POST[ 'phone' ]);
$password = test_input($_POST[ 'password' ]);
$sql = "INSERT into users " . "(profile, ppnames, email, phone, password, date) " . "VALUES ('{$profile}', '$name', '$email', '$phone',  '$password',  NOW())";
if (mysqli_query($conn, $sql)) {
 echo "<script language='javascript' type='text/javascript'> location.href='?site=signin' </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}        
    mysql_close($conn);
}
?>