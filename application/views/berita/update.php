    	<div class="container-fluid">
	        <div class="mt-4">
			  		<form method="post">
						<input type="hidden" value="<?=$berita['id']?>" name="id">
						<div class="mb-3">
							<label for="judul" class="form-label">Judul Berita</label>
							<input type="text" class="form-control" name="judul" placeholder="Judul Berita" value="<?=$berita['judul_berita']?>" required>
						</div>
						<div class="mb-3">
							<label for="isi" class="form-label">Isi Berita</label>
						    <textarea name="isi" class="form-control"><?=$berita['isi_berita']?></textarea>
						</div>
					    <div class="mb-3">
							<label for="tgl_pub" class="form-label">Tanggal Publish</label>
							<input type="date" class="form-control" name="tgl_pub" placeholder="Tanggal Publish" value="<?=$berita['tgl_publish']?>" required>
						</div>
						<div class="mb-3">
							<label for="wkt_pub" class="form-label">Waktu Publish</label>
							<input type="time" class="form-control" name="wkt_pub" placeholder="Waktu Publish" value="<?=$berita['waktu_publish']?>" required>
						</div>
						<div class="mb-3">
							<label for="kategori" class="form-label">Kategori</label>
							<select name="kategori" class="form-control">
								<?php foreach($kategori as $data):?>
									<option value="<?=$data['nama_kat']?>" <?php if($data['nama_kat']==$berita['category']){echo "selected";}?> > 
										<?=$data['nama_kat']?>
									</option>
								<?php endforeach;?>
							</select>
						</div>
						<button type="submit" name="edit" class="btn btn-warning">Update</button>
						<a type="cancel" href="<?= base_url('berita')?>" class="btn btn-primary">Batal</a>
					</form>
				</div>
  			</div>	
  		</div>
	</div>
</div>