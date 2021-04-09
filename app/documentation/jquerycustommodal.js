// jika file ready maka jalankan fungsi ini
$(function(){
	// cari class tambahdatamodal (disini class nya saya taruh di button tambahdata), lalu ketika di click jalankan fungsi dibawah
	$('.tambahdatamodal').on('click', function() {
        $('#labelmodal').html('Form Tambah Data');
        $('.modal-footer button[type=submit]').html('Simpan');
        // mereset agar tidak ada data yg ditampilkan ketika di klik tambah setelah mengeklik ubah
        $('#nama').val('');
        $('#alamat').val('');
        $('#nohp').val('');
    });



	// cari class labelmodal (disini class nya saya taruh di button ubah), lalu ketika di click jalankan fungsi dibawah
	$('.ubahmodal').on('click',function(){
		// cari id ubahmodal (disini saya letakan di label di tulisan FormTambah Data) lalu timpa dengan tulisan baru
		$('#labelmodal').html('Form Ubah Data');
		// ini menggunakan css selector, cara bacanya yaitu carikan button dengan tipe submit di class modal-footer lalu timpa dengan tulisan ubah
		$('.modal-footer button[type=submit]').html('Ubah');
		// ini menggunakan css selector, cara bacanya yaitu carikanform di class modal-body lalu ganti atribut action(urlnya) dengan atribut baru
		$('.modal-body form').attr('action','http://localhost/mastermvc/public/contohdata/ubah');
		// ketika tombol diklik(maksudnya dalam funsi ini), maka ambil data id
		const id = $(this).data('id');
		//ketika mau menjalankan ajax di jquery ketikan $.ajax lalu buka dan tutup kurung kurawal karena bisa mneyimpan banyak object
		$.ajax({
			//alamat url atau disini method yg dibuat yaitu get ubah
			url:'http://localhost/mastermvc/public/contohdata/getubah',
			// membaca id, id pertama yaitu id yg terdefinisikan oleh cost id di atas lalu id selanjutnya adalah isi nya
			data: {id : id},
			method : 'post',
			dataType:'json',
			// ketika success maka kembalikan variable data yg diambil dari database
			success: function(data){
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#nohp').val(data.nohp);
				// jangan lupa tambahkan input hidden di form sebelum menambahkan scrip ini
				$('#id').val(data.id);

			}
		});
	});
});