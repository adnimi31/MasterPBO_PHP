
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
  <a class="navbar-brand" href="<?=BASEURL ?>/dashboard">AM MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=BASEURL ?>/dashboard">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL; ?>/dashboard/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL; ?>/contohdata">Contoh Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL; ?>/home/logout" onclick="return confirm('Apa anda yakin ingin Logout?');">Logout</a>
      </li>
    </ul>
    <span class="navbar-text">
      <form class="form-inline">
	    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  </form>
    </span>
  </div>
  </div>
</nav>

