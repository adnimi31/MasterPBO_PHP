# MasterPBO_PHP
master template php berorientasi object buatan sendiri

MVC ini dibuat oleh AM

Silahkan digunakan dengan gratis, mohon jagan hapus creditnya(readme.txt, maupun readme.md)
https://github.com/adnimi31/

===========================================================================

spesifikasi:

*MVC ini sudah dilengkapi dengan contoh CRUD sederhana dan Login multiple User

*sudah di tes dan berjalan menggunakan php5.6

*database PDO berfungsi disini, kemungkinan bisa bejalan di php7 juga, karena support PDO sudah mulai ada di php5.6

*untuk versi php dibawah 5.6 belum dicoba, dan kemungkinan tidak bekerja karena belum support PHP Berorientasi Object


===========================================================================

point penting:

*setting database dan basic url ada di file config directori : app/config/config.php

*aturan memberi nama yaitu <a href =<?=BASEURL?>/nama controler/nama methode>, lebih tepatnya adalah objectnya agar lebih mudah dipahami saya gunakan url/nama controler/nama methode

	misal <a href =<?=BASEURL?>/Home/about>
	
    catatan : - cara diatas digunakan bila mengunakan methode lain selain index, karena method index sudah otomatis dieksekusi jadi penamaanya bisa langsu dengan nama controller
    			misal <a href =<?=BASEURL?>/Home>
			
*untuk mengetahui default direc url jika tidak ada controller lain yg menghandel bisa di cek di App.php yg terletak di directori : app/core/App.php

*untuk pesan peringatan entah itu success atau gagal pengaturan nya ada di Flasher.php yg terletak di di directori : app/core/App.php dan berhubung saya menggunakan cara SESSION session strat nya ada di file index.php di directori public

*untuk keterangan lengkap tentang script atau DOCUMENTATION bisa dilihat di directori : app/documentation

*tentang login: 

-disini saya menggunakan controller Home untuk menghandle login

-pembuatan session berada di Home controller pada method login
