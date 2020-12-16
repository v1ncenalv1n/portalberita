    	<div class="container-fluid">
	        <div class="mt-4">
			  		<form method="post">
						<input type="hidden" value="<?=$kategori['id_kat']?>" name="id">
						<div class="mb-3">
							<label for="nama_kategori" class="form-label">Nama Kategori</label>
							<input type="text" class="form-control" name="nama_kategori" value="<?=$kategori['nama_kat']?>" placeholder="Nama Kategori" required>
						</div>
						<button type="submit" name="edit" class="btn btn-warning">Update User</button>
						<a type="cancel" href="<?= base_url('kategori')?>" class="btn btn-primary">Batal</a>
					</form>
				</div>
  			</div>	
  		</div>
	</div>