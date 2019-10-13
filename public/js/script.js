$(function(){

	$('.btnTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('#nama').val('');
        $('#stb').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
	});


	$('.modalUbah').on('click', function(){
		$('#judulModalLabel').html('Edit Data Mahasiswa');;
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit');
		
		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getEdit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#stb').val(data.stb);
				$('#jurusan').val(data.jurusan);
				$('#email').val(data.email);
				$('#id').val(data.id);
			}
		});

	});
	

});