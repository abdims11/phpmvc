<div class="container mt-3">

	<div class="row">
		<div class="col-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary btnTambahData" data-toggle="modal" data-target="#formModal">
			  Tambah Data
			</button>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-6"> 
			<form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Cari mahasiswa. . ." aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
				  </div>
				</div>
			</form>
		</div>			
	</div>	
	
	<div class="row">
		<div class="col-6">
			
			<h3 class="mt-3">Daftar Mahasiswa</h3>

			<ul class="list-group">
				<?php foreach ($data['mhs'] as $value): ?>
					<li class="list-group-item">
						<?= $value['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $value['id']; ?>" class="badge badge-danger float-right ml-1" onClick="return confirm('apakah anda yakin ? . . .')">Hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $value['id']; ?>" class="badge badge-success float-right ml-1 modalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $value['id']; ?>">Edit</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $value['id']; ?>" class="badge badge-primary float-right ml-1	">Detail</a>
					</li>
				<?php endforeach ?>
			</ul>


		</div>	
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
        		<label for="nama">Nama</label>
			    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
			</div>
			<div class="form-group">
        		<label for="stb">Stambuk</label>
			    <input type="text" class="form-control" name="stb" id="stb" placeholder="Masukkan stambuk">
			</div>
			<div class="form-group">
        		<label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
			</div>
        	<div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik Informatika">Teknik Informatika</option>
			      <option value="Sistem Informasi">Sistem Informasi</option>
			      <option value="Manajemen Informatika">Manajemen Informatika</option>
			    </select>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
   		</form>
      </div>
    </div>
  </div>
</div>