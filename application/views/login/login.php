<form method="post" class="form-signin">

	<h1 align="center" class="h3 mb-3 font-weight-normal">Please Login</h1>
	<?php if ($this->session->flashdata('belum_login') == '1'): ?>
		<br>
		<div class="alert alert-danger" role="alert">
		    Anda belum login
		</div>
	<?php endif ?>
	<?php if ($this->session->flashdata('salah_login') == '1'): ?>
		<br>
		<div class="alert alert-danger" role="alert">
		    Username/Password salah
		</div>
	<?php endif ?>
	<label for="username" class="sr-only">Username</label>
	<input type="text" class="form-control" name="username" placeholder="Username" required>			
	<label for="password" class="sr-only">Password</label>
	<input type="password" class="form-control"name="password" placeholder="Password" required>
	<button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
</form>