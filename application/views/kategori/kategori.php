    	<div class="container-fluid">
	        <div class="mt-4">
		  	<a href="<?= base_url('kategori/tambah'); ?>" class="btn btn-success">Tambah Kategori</a>
		  	<br><br>
		  	<div class="table-responsive-sm">
		  		<table id="tableuser" class="table">
					<thead class="table-dark">
						<tr>
							<td>Kategori</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($user as $data):?>
						<tr>
							<td><?=$data['nama_kat']?></td>
							<td><a class="btn btn-warning" href="<?=base_url('kategori/edit/'.$data['id_kat'])?>">Edit</a> 
								<a class="btn btn-danger" href="<?=base_url('kategori/hapus/'.$data['id_kat'])?>">Hapus</a></td>
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