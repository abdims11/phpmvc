<div class="container mt-3">
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	  	<?php if (is_null($data['mhs']['id'])): ?>
	    	<h5 class="card-title">harus ada parameter</h5>
	  	<?php endif ?>
	  
	    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['stb']; ?></h6>
	    <p class="card-text"><?= $data['mhs']['email'] ?></p>
	    <p class="card-text"><?= $data['mhs']['jurusan'] ?></p>
	    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
	  </div>
	</div>
</div>