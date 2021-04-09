
$(function(){
	$('.tambahdatamodal').on('click', function() {
        $('#labelmodal').html('Form Tambah Data');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('#nama').val('');
        $('#alamat').val('');
        $('#nohp').val('');
    });



	$('.ubahmodal').on('click',function(){
		$('#labelmodal').html('Form Ubah Data');		
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action','http://localhost/mastermvc/public/contohdata/ubah');
		const id = $(this).data('id');
		$.ajax({
			url:'http://localhost/mastermvc/public/contohdata/getubah',
			data: {id : id},
			method : 'post',
			dataType:'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#nohp').val(data.nohp);
				$('#id').val(data.id);

			}
		});
	});
});