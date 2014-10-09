//Tutorial TEXT Array & View Mode Declaration
//mode = continue -> will continue last statement on 'instruksi'
//mode = standalone -> will create new statement on 'instruksi'
var wInstruksiText = 
[
	[
		[	//1.Screen Lembar Kerja
		text="<p>Microsoft Word juga mampu membantu dalam administrasi surat yang ditujukan kepada beberapa orang berbeda, namun ada bagian tertentu yang harus berbeda. Fungsi tersebut adalah <strong>Mail Merge</strong>. Dalam <strong>Mail Merge</strong>, ada 2 buah dokumen yang berdiri sendiri yaitu <em>MAIN DOCUMENT</em> dan <em>RECIPIENT/DATA SOURCE</em>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Untuk mulai membuat <strong>Mail Merge</strong>, pilih menu <strong>Mailings</strong>.</p>",
		mode="standalone"
		],
		[	//2. Mailings
		text="<p>Menu <strong>Mailings</strong> berisi berbagai fungsi yang mempermudahkan kita dalam membuat surat.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Pilih <strong>Start Mail Merge</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//3.
		text="<p><strong>Start Mail Merge</strong> mempunyai beberapa opsi yang akan membantu kita dengan mudah memilih model yang diperlukan</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Pilih menu <strong>Step by Step Mail Merge Wizard</strong>.</p>",
		mode="standalone"
		],
		[	//4
		text="<p>Akan muncul <em>sidebar wizard</em> yang membantu kita dalam hal <strong>Mail Merge</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Dimana saja</strong> untuk menampilkan text demo.</p>",
		mode="standalone"
		],
		[	//5
		text="<p>Pada <em>sidebar wizard</em> <strong>step - 1</strong>, kita diminta menentukan jenis dokumen. Apakah letters, envelope ataupun labels.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Untuk pembuatan surat, pilih <strong>Letters</strong> dan klik <strong>Next : Starting Document</strong>.</p>",
		mode="standalone"
		],
		[	//6
		text="<p><strong>Step 2</strong> akan muncul pertanyaan yang menanyakan bagaimana kita ingin menggunakan dokumen kita.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>pilih <strong>Use current document</strong> dan klik <strong>Next : Select Recipient</strong>.</p>",
		mode="standalone"
		],
		[	//7
		text="<p><strong>Step 3</strong> akan ada 3 pilihan, mulai dari mengambil data penerima yang sudah ada, dari <strong>Outlook</strong>, atau dari data baru apabila kita masih belum memiliki file data.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>apabila <strong>belum memiliki data</strong>, Pilih <strong>Type a new list</strong> .</p>",
		mode="standalone"
		],
		[	//8
		text="<p><strong>Step 3</strong> akan ada 3 pilihan, mulai dari mengambil data penerima yang sudah ada, dari <strong>Outlook</strong>, atau dari data baru apabila kita masih belum memiliki file data.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>apabila <strong>belum memiliki data</strong>, Pilih <strong>Type a new list</strong> lalu klik <strong>Create</strong> .</p>",
		mode="standalone"
		],
		[	//9
		text="<p>Selanjutnya akan muncul Tabel kotak isian data dengan judul kolom (field) yang tersedia. Kemungkinan besar kita perlu menyesuaikan kolom seperti yang kita inginkan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik <strong>Customize Columns</strong> untuk mulai menyesuaikan kolom.</p>",
		mode="standalone"
		],
		[	//10.
		text="<p>Disini terdapat kolom (field) yang telah tersedia dari Microsoft Word. Bila kita tidak memerlukannya, kita dapat menghapusnya dengan aman.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik <strong>Delete</strong> untuk mulai menghapus.</p>",
		mode="standalone"
		],
		[	//11.
		text="<p>Akan muncul konfirmasi bahwa kolom (field) yang dipilih akan dihapus beserta datanya.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik <strong>Yes</strong> untuk menghapus.</p>",
		mode="standalone"
		],
		[	//12
		text="<p>Maka akan terlihat bahwa kolom (field) yang kita pilih telah dihapus dari daftar kolom(field) <em>default</em>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Delete</strong> untuk menghapus semua kolom(field) <em>default</em>.</p>",
		mode="standalone"
		],
		[	//13
		text="<p>Setelah kita mengosongkan seluruh kolom, maka barulah kita mengisikan kolom (field) yang kita inginkan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Add</strong> untuk mulai mengisi kolom yang baru.</p>",
		mode="standalone"
		],
		[	//14
		text="<p>Kemudian kita bisa mengisikan nama kolom yang kita inginkan untuk dokumen kita.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik lokasi <strong>pengisian data</strong> untuk simulasi pengisian.</p>",
		mode="standalone"
		],
		[	//15
		text="<p>Kemudian kita bisa mengisikan nama kolom yang kita inginkan untuk dokumen kita.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>OK</strong> apabila telah selesai memasukkan data .</p>",
		mode="standalone"
		],
		[	//16
		text="<p>Sekarang kita akan memenuhi seluruh isi kolom dengan apa yang kita butuhkan. Untuk contoh ini, kita akan memakai <strong>Nama, Kota, dan Alamat</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Add</strong> untuk simulasi pengisian.</p>",
		mode="standalone"
		],
		[	//17
		text="<p>Bila <strong>Customize Column</strong> telah selesai, maka kita dapat kembali ke menu sebelumnya.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik <strong>Ok</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//18
		text="<p>Sekarang kita akan memenuhi seluruh isi kolom dengan apa yang kita butuhkan. Untuk contoh ini, kita akan memakai <strong>Nama, Kota, dan Alamat</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Add</strong> untuk simulasi pengisian.</p>",
		mode="standalone"
		],
		[	//19
		text="<p>Setelah kita telah selesai mengisi data yang diperlukan untuk data kontak. Maka kita dapat melanjutkan untuk menyimpan data tersebut..</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Ok</strong> untuk melanjutkan.</p>",
		mode="standalone"		
		],
		[	//20
		text="<p>Kita akan dapat memilih tempat untuk menyimpan data tersebut dan memberi nama yang mudah diingat.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Save</strong> untuk menyimpan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1.
		text="<p>Sekarang kita akan mempelajari cara mengaplikasikan <strong>Mail Merge</strong> ke dalam dokumen kita.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Insert Merge Field</strong> untuk melihat menu darinya beserta dengan lokasi kursor.</p>",
		mode="standalone"
		],
		[	//2
		text="<p>Perhatikan <strong>lokasi kursor!</strong>, Lokasi inilah yang akan menjadi tempat dimana kita memilih field yang dipilih dari menu <strong>Insert Merge Field</strong> dipasang.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik field <strong>Nama</strong> untuk memasukkan field yang dimaksud.</p>",
		mode="standalone"
		],
		[	//3
		text="<p>Field yang dimaksud akan terpasang tepat di lokasi kursor seperti yang terlihat di bawah.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik lokasi dimana <strong>field</strong> akan dipasangkan.</p>",
		mode="standalone"
		],
		[	//4
		text="<p>Kita dapat melihat preview dari field dengan fungsi yang disediakan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Preview Result</strong> untuk melihat data yang bersangkutan dengan field.</p>",
		mode="standalone"
		],
		[	//5
		text="<p>Dengan mode <strong>Preview Result</strong> tetap aktif, kita dapat mengatur data yang akan ditampilkan dengan fungsi navigasi yang tersedia.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Navigasi Next</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//6
		text="<p>Sebagai catatan, anda dapat meng-<em>edit</em> daftar recipient kembali.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Dari sidebar Mail Merge, klik <strong>Edit recipient list</strong>.</p>",
		mode="standalone"
		],
		[	//7
		text="<p>Anda bisa kembali meng-edit sesuai tutorial sebelumnya.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Dimana saja</strong> untuk mengakhiri</strong>.</p>",
		mode="standalone"
		]
	]
]


