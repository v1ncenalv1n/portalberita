    	<div class="container-fluid">
    		<?php if ($this->session->flashdata('pesan') == "Ditambah"): ?>
    			<br>
	            <div class="alert alert-success" role="alert">
	              Data berhasil ditambah
	            </div>
  			<?php endif ?>
  			<?php if ($this->session->flashdata('pesan') == "Diubah"): ?>
  				<br>
	            <div class="alert alert-success" role="alert">
	              Data berhasil diubah
	            </div>
		  	<?php endif ?>
		  	<?php if ($this->session->flashdata('pesan') == "Dihapus"): ?>
		  		<br>
		        <div class="alert alert-success" role="alert">
		            Data berhasil dihapus
		        </div>
		  	<?php endif ?>
	        <div class="mt-4">
				<a href="<?= base_url('berita/tambah'); ?>" class="btn btn-success">Tambah</a>
				<br><br>
				<div class="table-responsive-sm">
					<table class="table" id="tableberita" >
						<thead class="table-dark">
							<tr>
								<td>Judul Berita</td>
								<td>Tanggal Upload</td>
								<td>Tanggal Publish</td>
								<td>Penulis</td>
								<td>Kategori</td>
								<td>Dilihat</td>
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach($berita as $data):?>
							<tr>
								<td><?=word_limiter($data['judul_berita'],6)?></td>
								<td><?=$data['tgl_upload']?></td>
								<td><?=$data['tgl_publish']?></td>
								<td><?=$data['author_username']?></td>
								<td><?=$data['category']?></td>
								<td><?=$data['view']?></td>
								<td><a class="btn btn-warning" href="<?=base_url('berita/edit/'.$data['id'])?>">Edit</a>
									<a class="btn btn-danger" href="<?=base_url('berita/hapus/'.$data['id'])?>">Hapus</a></td>
							</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
   </div>
</div>
    <!-- /#page-content-wrapper -->
<script type="text/javascript">
		$(document).ready(function() {
    	$('#tableberita').DataTable();
	} );
</script>