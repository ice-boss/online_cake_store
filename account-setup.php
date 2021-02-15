<style type="text/css">
	body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("img/bg.png");

  /* Add the blur effect */
  filter: blur(1px);
  -webkit-filter: blur(1px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
<body class="fixed-bottom-padding">
<div class="bg-image"></div>
<div class="osahan-account-setup">
<div class="account-setup">
<video loop="" autoplay="" muted="" id="vid" class="w-100">
<source src="img/grocery.mp4" type="video/mp4">
<source src="img/grocery.mp4" type="video/ogg">
Your browser does not support the video tag.
</video>
</div>
</div>
<div style="z-index: 2" class="fixed-top">
<a class="p-4 text-white font-weight-bold d-flex align-items-center h4 text-decoration-none" href="?site=home">
<img class="as-osahan-logo rounded" src="img/logo.jpg">
</a>
</div>
<div class="fixed-bottom fixed-bottom-auto px-4 pt-4 text-center">
<a href="?site=get_started" class="btn btn-dark btn-block rounded btn-lg btn-apple">
<i class="icofont-brand-apple mr-2"></i> Sign up with Apple
</a>
<a href="?site=get_started" class="btn btn-light btn-block rounded btn-lg btn-google">
<i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
</a>
<a href="?site=signup" class="btn btn-success rounded btn-block btn-lg">
Sign up
</a>
<a href="?site=signin" class="text-dark btn btn-sm btn-block text-decoration-none mb-2">Already have an Account? Login Here</a>
</div>