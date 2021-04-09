<div class="container">
<div class="jumbotron mt-3">
	<!-- letak alert atau pemberitahuan -->
	  <div class="row">
	    <div class="col-lg-6">
	      <?php Flasher::flash(); ?>
	    </div>
	  </div>

	<h1>Form Register</h1>
	<form action="<?=BASEURL; ?>/register/adduser" method="post">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Usernme</label>
	    <input type="text" class="form-control" id="username" name="username" autofocus="">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="password" name="password">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Hak Akses</label>
	    <select class="form-control form-control-lg" id="role" name="role">
		  <option value="Admin">Admin</option>
		  <option value="SAdmin">Super Admin</option>
		</select>
	  </div>	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

</div>
</div>