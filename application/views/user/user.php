    	<div class="container-fluid">
	        <div class="mt-4">
		  	<a href="<?= base_url('user/tambah'); ?>" class="btn btn-success">Tambah User</a>
		  	<br><br>
		  	<div class="table-responsive-sm">
		  		<table id="tableuser" class="table">
					<thead class="table-dark">
						<tr>
							<td>Username</td>
							<td>Nama User</td>
							<td>Role</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($user as $data):?>
						<tr>
							<td><?=$data['username']?></td>
							<td><?=$data['namauser']?></td>
							<td><?php if ($data['user_role'] == 1){
								echo 'Admin';
							}else{
								echo 'Writer';
							} ?></td>
							<td><a class="btn btn-warning" href="<?=base_url('user/edit/'.$data['id'])?>">Edit</a> 
								<a class="btn btn-danger" href="<?=base_url('user/hapus/'.$data['id'])?>">Hapus</a></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
  			</div>	
  		</div>
	</div>
</div>
<script type="text/javascript">
		$(document).ready(function() {
    	$('#tableuser').DataTable();
	} );
</script>