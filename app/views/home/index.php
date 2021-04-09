<!DOCTYPE html>
<html>
<head>
	<title><?= $data['judul'];  ?></title>

<!-- memanggil di lokal, mulainya langsung pada saat memulai web server -->
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="<?=BASEURL ?>">AM MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</nav>


<p></p>
<div class="container">
<center>

	<!-- letak alert atau pemberitahuan -->
  <div class="row">
    <div class="col-lg-12">
      <?php Flasher::flash(); ?>
    </div>
  </div>

<div class="card" style="width: 25rem;">
<h1>Login</h1>
<center>
  <img src="<?= BASEURL;?>/image/login.png" alt="Login" width="140" height="150">
</center>  
  <div class="card-body">
  <form action="<?= BASEURL;?>/home/login" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" class="form-control" id="username" name="username" autofocus="">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="password" name="password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
</center>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- memanggil di lokal, mulainya langsung pada saat memulai web server -->

<script src="<?= BASEURL;?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= BASEURL;?>/js/bootstrap.min.js"></script>
<script src="<?= BASEURL;?>/js/jquerycustommodal.js"></script>
</body>
</html>