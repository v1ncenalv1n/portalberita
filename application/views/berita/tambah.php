    	<div class="container-fluid">
	        <div class="mt-4">
			  		<form method="post">
						<div class="mb-3">
							<label for="judul" class="form-label">Judul Berita</label>
							<input type="text" class="form-control" name="judul" placeholder="Judul Berita" required>
						</div>
						
						<div class="mb-3">
							<label for="isi" class="form-label">Isi Berita</label>
						    <textarea name="isi" class="form-control" id="isi"></textarea>
						</div>
					   
					    <div class="mb-3">
							<label for="tgl_pub" class="form-label">Tanggal Publish</label>
							<input type="date" class="form-control" name="tgl_pub" placeholder="Tanggal Publish" required>
						</div>
						
						<div class="mb-3">
							<label for="wkt_pub" class="form-label">Waktu Publish</label>
							<input type="time"  class="form-control" name="wkt_pub" placeholder="Waktu Publish" required>
						</div>

						<div class="mb-3">
							<label for="kategori" class="form-label">Kategori</label>
							<select name="kategori" class="form-control" required>
								<?php foreach($kategori as $data):?>
									<option value="<?=$data['nama_kat']?>"><?=$data['nama_kat']?></option>
								<?php endforeach;?>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
						<button type="reset" name="reset" class="btn btn-warning">Reset</button>
					</form>
				</div>
  			</div>	
  		</div>
	</div>
</div>

