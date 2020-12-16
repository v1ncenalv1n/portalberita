    	<div class="container-fluid">
	        <div class="mt-4">
			  		<form method="post">
						<input type="hidden" value="<?=$user['id']?>" name="id">
						<div class="mb-3">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username" value="<?=$user['username']?>" required>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password" value="<?=$user['password']?>"required>
						</div>
						<div class="mb-3">
							<label for="nama" class="form-label">Nama User</label>
							<input type="text" class="form-control" name="nama" placeholder="Nama User" value="<?=$user['namauser']?>" required>
						</div>
						<div class="mb-3">
							<label for="role" class="form-label">Role</label>
							<select name="role" class="form-control">
								<option value=1 <?php if($user['user_role']==1){echo "selected";} ?>>Admin</option>
								<option value=2 <?php if($user['user_role']==2){echo "selected";} ?>>Writer</option>
							</select>
						</div>
						<button type="submit" name="edit" class="btn btn-warning">Update User</button>
						<a type="cancel" href="<?= base_url('user')?>" class="btn btn-primary">Batal</a>
					</form>
				</div>
  			</div>	
  		</div>
	</div>