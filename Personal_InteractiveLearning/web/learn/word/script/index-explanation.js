// JavaScript Document
function explain(expl){	
	if(expl == 1){
		var explContent = "Disini anda akan mengenali Microsoft Word untuk pertama kalinya. Dimulai dari cara membuat dokumen baru, menyimpan, mencari kata dan beberapa fungsi umum yang dapat dijumpai di interface utama Microsoft Word";
	}
	else if (expl == 2){
		var explContent = "Pada tutorial ini anda akan belajar tentang pemformatan paragraf. Dengan pengaturan format paragraf, diharapkan dokumen yang dibuat akan menjadi lebih menarik, rapi, dan nyaman untuk dibaca. Pembahasan meliputi tehnik pengaturan paragraf, pengaturan format paragraf, pengaturan tabulasi, pengaturan Bullet and Numbering pada paragraf, pengaturan style paragraf dan pemberian bingkai halaman.";
	}
	else if (expl == 3){
		var explContent = "Pada tutorial ini anda akan belajar tentang cara merancang dokumen agar tampak professional (dirancang dan dipoles dengan baik). Dan juga cara untuk memberi format pada paragraph dan halaman yang akan mempengaruhi daya tarik konsumen anda sekaligus membantu menarik minat pembaca pada informasi penting.<br> Pembahasan di tutorial ini meliputi cara format text untuk kata kata yang <strong>WAH</strong>, penyusunan paragraf untuk dapat mudah dibaca, membuat lebih tebal, miring ataupun garis bawah, serta cara memberi warna tulisan dan cara meratakan paragraf";
	}
	else if (expl == 4){
		var explContent = "Pada tutorial ini anda akan diajak belajar mengenal kemampuan pengaturan kolom yang ada di Microsoft Word. Kolom merupakan sebuah fungsi yang mampu mengatur sebuah paragraf menjadi 2 kolom atau bahkan lebih. Fungsi ini terutama berguna untuk menyusun artikel tertentu agar terlihat profesional atau untuk beberapa keadaan tertentu.";
	}
	else if (expl == 5){
		var explContent = "Dalam tutorial ini, anda akan diperkenalkan dengan kemampuan mengolah grafis yang ada dalam Microsoft Word. Microsoft Word mampu mengubah gambar agar terlihat lebih menarik secara visual, sekaligus juga untuk memudahkan penyampaian informasi yang sulit untuk diberikan dalam bentuk tekstual. Pembahasan tutorial ini akan meliputi fungsi-fungsi yang terdapat pada toolbar Drawing, cara menyisipkan gambar, atau menggambar objek tanpa bantuan program lain, termasuk cara merubah ukuran gambar, diagram, dan juga Word Art.";
	}
	else if (expl == 6){
		var explContent = "Dalam tutorial ini, anda akan diperkenalkan dengan cara membuat dan mengolah tabel dalam Microsoft Word. Tabel itu sendiri digunakan untuk mengelompokkan dan mengorganisir informasi dalam dokumen ke dalam sebuah format yang padat, konsisten, dan mudah dibaca. Tabel adalah kumpulan data yang berhubungan satu sama lain disusun dalam baris dan kolom. Perpotongan antar baris dan kolom kita namakan dengan Sel. Anda bisa membuat sebuah tabel yang seragam dengan sel-sel berukuran standar atau menggambar sebuah tabel sendiri dengan beragam ukuran sel, atau anda bisa membuat sebuah tabel dengan teks, angka dan gambar kedalam sel-sel tersebut. <br> Hal-hal yang dipelajari dalam bab ini adalah sebagai berikut : <br><ul><li>Membuat tabel</li><li>Menyisipkan baris dan menyisipkan kolom</li><li>Menghapus tabel/baris/kolom/sel</li><li>Mengopi tabel dan mengopi kolom</li><li>Menggabungkan sel</li><li>Memilih garis dan warna tabel</li><li>Perhitungan pada tabel</li></ul>";	
	}
	else if (expl == 7){
		var explContent = "Dalam tutorial ini, anda akan diperkenalkan dengan Mail Merge. Mail Merge sangat berguna dalam bidang administrasi, ada kalanya kita membutuhkan mencetak sebuah dokumen yang akan dikirimkan/ ditujukan kepada beberapa orang yang bebeda, akan tetapi dalam dokumen tersebut ada beberapa bagian yang selalu berubah/berbeda satu dengan yang lain. <br> Misalnya : <br><ul><li>Membuat surat undangan</li><li>Membuat piagam/ sertifikat</li><li>Membuat surat keterangan</li><li>Dan beberapa dokumen sejenis lainnya</li></ul><br>Untuk mempermudah dalam menyelesaikan pekerjaan tersebut, kita bisa menggunakan fasilitas didalam Microsoft Word yaitu MAIL MERGE yang mempermudah pengerjaan seperti di atas.";
	}
	else if (expl == 8){
		var explContent = "Dalam tutoral terakhir ini, kita akan mengenal pencetakan. Pencetakan ada yang bisa dilakukan ke layar atau dicetak ke kertas. Pembahasan ini meliputi berbagai fungsi yang ada dalam laman cetak printer.";
	}
	else if (expl == 0){
		var explContent = "";
	}
	document.getElementById('explain-content').innerHTML = explContent;
}

