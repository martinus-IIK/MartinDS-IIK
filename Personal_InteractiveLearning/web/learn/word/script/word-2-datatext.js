//Tutorial TEXT Array & View Mode Declaration
//mode = continue -> will continue last statement on 'instruksi'
//mode = standalone -> will create new statement on 'instruksi'
var wInstruksiText = 
[
	[
		[	//Screen Lembar Kerja
		text="<p>Kita akan belajar mengenai pengaturan format paragraf dimana pengaturan yang benar akan membuat dokumen menjadi rapi.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Align Text Button</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p><strong>Align Text Buttons</strong> digunakan untuk mengatur posisi paragraf ke batas indent ataupun tengah. Disini kita akan melihat <strong>Left Align Text</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Left Align Text</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p><strong>Left Align Text</strong> mengatur posisi paragraft menjadi rata kiri seperti <em>contoh</em> di bawah.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Middle Align Text</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p><strong>Middle Align Text</strong> mengatur posisi paragraft menjadi fokus di tengah, tanpa ada rata kiri ataupun kanan seperti <em>contoh</em> di bawah.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Right Align Text</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p><strong>Right Align Text</strong> mengatur posisi paragraft menjadi rata kanan seperti <em>contoh</em> di bawah.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Justify Align Text</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p><strong>Justify Align Text</strong> mengatur posisi paragraft menjadi rata kiri dan kanan seperti <em>contoh</em> di bawah.<br>Namun ada juga cara lain untuk mengakses posisi paragraf dengan lebih detail.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Panah</strong> di tab Paragraph untuk melanjutkan.</p>",
		mode="standalone"
		],
		[
		text="<p>Di bawah terdapat <strong>Jendela Paragraf</strong>. Disini terdapat fungsi-fungsi lain namun kita abaikan dulu semua.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Combo box</strong> di <strong>Alignment</strong> untuk melihat isinya.</p>",
		mode="standalone"
		],
		[
		text="<p>Disini, kita dapat melihat <strong>menu</strong> yang sama untuk pengaturan paragraph, hanya disini berupa text.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>OK</strong> untuk melanjutkan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1
		text="<p>Sekarang kita akan belajar mengenai <strong>Indentasi</strong>. Indentasi adalah teks yang masuk ke dalam, dihitung dari margin. Sedangkan pengertian margin adalah batas-batas pengetikan yang diukur dari tepi kertas ( baik tepi kertas atas, bawah, kiri, maupun bawah).<br>Ada 4 macam indentasi, yaitu <strong>First Line, Hanging Indent, Left Indent, Right Indent.</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik kembali tombol <strong>Panah</strong> yang berada di Tab Menu <strong>Paragraf</strong>.</p>",
		mode="standalone"
		],
		[	//2
		text="<p>Sekarang kita akan melihat bagian <strong>Indentation</strong> dimana disini terdapat <strong>Left,Right,Special</strong> dan <strong>By :</strong><br><strong>First Line</strong> disini merupakan bagian dari <strong>Special</strong><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>First Line</strong> untuk melihat fungsinya.</p>",
		mode="standalone"
		],
		[	//3
		text="<p>Contoh <strong>First Line :</strong> Disini kita bisa melihat dari contoh bahwa baris pertama telah lebih masuk ke dalam.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Hanging</strong> untuk melihat fungsinya.</p>",
		mode="standalone"
		],
		[	//4
		text="<p>Contoh <strong>Hanging :</strong> Disini kita bisa melihat dari contoh bahwa baris selain baris pertama telah menjorok keluar.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Left</strong> untuk melihat fungsinya.</p>",
		mode="standalone"
		],
		[	//5
		text="<p>Contoh <strong>Left :</strong> Disini kita bisa melihat dari contoh bahwa seluruh posisi baris untuk batas kiri berubah sesuai pengaturan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Right</strong> untuk melihat fungsinya.</p>",
		mode="standalone"
		],
		[
		text="<p>Contoh <strong>Right :</strong> Disini kita bisa melihat dari contoh bahwa seluruh posisi baris untuk batas kanan berubah sesuai pengaturan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1.
		text="<p>Kadangkala dalam penulisan teks yang terdiri dari beberapa baris sampai diakhiri dengan penekanan Enter, jarak antar baris sedikit lebih renggang atau rapat. Maka disini akan diajari bagaimana cara untuk memformat paragraf sesuai dengan keinginan</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//2
		text="<p>Mari kita kembali ke <strong>Setting Paragraph</strong>. Pastikan bahwa lokasi pandangan berada di tab <strong>Indents and Spacing</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik kolom dari <strong>Line Spacing</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//3
		text="<p>Disini anda dapat mengatur jarak kerapatan atau kerenggangan <strong>antar baris</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1
		text="<p>Sekarang kita akan belajar mengenai <strong>Tabulasi</strong>. Untuk melakukan pengetikan yang rata tengah, kiri maupun kanan namun tidak berlaku untuk semua tulisan dalam satu paragraf maka cara yang digunakan adalah melalui pemformatan tabulasi</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Kita akan kembali ke menu <strong>Paragraph</strong>. Klik <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//2
		text="<p>Sekarang kita akan pergi ke menu <strong>Tabs</strong> yang berada di menu <strong>Paragraph</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Tabs</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//3
		text="<p>Di dalam menu <strong>Tabulasi</strong> terdapat sebuah fungsi bernama <strong>Tab Stop Position</strong> dimana ia berfungsi sebagai tempat memasukkan posisi Tabulasi</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik posisi <strong>Tabs Stop</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//4
		text="<p>Untuk perataan nya, dapat diliad pada bagian <strong>Alignment</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik posisi <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1
		text="<p>Selanjutnya kita akan mengenal <strong>Bullet and Numbering</strong>. Fungsi ini umumnya digunakan untuk pengetikan dalam pembuatan buku atau skripsi.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Untuk memulai, klik posisi <strong>Bullets</strong> berada.</p>",
		mode="standalone"
		],
		[	//2. 
		text="<p>Kita dapat melihat contoh interface<strong>Bullet</strong> dari gambar di bawah ini.</p> <p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Bullet</strong> yang diberi tanda untuk melihat fungsinya.</p>",
		mode="standalone"	
		],
		[	//3. 
		text="<p>Contoh di bawah menunjukkan bahwa awal menu akan dimulai dengan model <strong>Bullet</strong> yang kita pilih. </p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Numbering</strong> yang diberi tanda untuk melihat menu.</p>",
		mode="standalone"	
		],
		[	//4
		text="<p><strong>Numbering</strong> juga memiliki beberapa style yang akan dapat dipakai begitu kita memilihnya. </p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Numbering</strong> yang diberi tanda untuk melihat fungsinya.</p>",
		mode="standalone"	
		],
		[	//5
		text="<p>Contoh di bawah menunjukkan bahwa awal menu akan diubah ke model <strong>Numbering</strong> yang kita pilih.<br>Ada juga <strong>Multilevel List</strong> yang memberikan cara untuk kita bisa membuat detail daftar dari sebuah daftar utama.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Multilevel List</strong> yang diberi tanda untuk melihat menu.</p>",
		mode="standalone"	
		],
		[	//6
		text="<p>Dari sini kita bisa melihat bahwa tipe menunya hampir sama dengan <strong>Numbering</strong> dimana kita bisa memilih untuk memakai style yang telah disediakan atau membuat style sendiri, namun cara kerja dari <strong>Multilevel List</strong> sama dengan sebelumnya.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>Dimana saja</strong> untuk melanjutkan.</p>",
		mode="standalone"
		]
	],
	[
		[	//1
		text="<p>Selanjutnya kita akan mempelajari cara memberi <strong>bingkai halaman</strong> atau juga mungkin dapat dikenal dengan istilah <em>border</em>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik Tab <strong>Page Layout</strong> untuk memulai.</p>",
		mode="standalone"
		],
		[	//2
		text="<p>Di menu paragraph ini terdapat sederet fungsi, dan fungsi untuk memberi bingkai atau border adalah <strong>Page Border</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>Page Border</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//3
		text="<p><strong>Style</strong> digunakan untuk memilih ketebalan garis border<br><strong>Color dan Width</strong> untuk warna dan tingkat ketebalan border<br><strong>Art</strong> digunakan untuk membuat border dengan beberapa model yang telah disediakan <strong>Word</strong></p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik tombol <strong>OK</strong> untuk melihat demonya.</p>",
		mode="standalone"
		],
		[	//4
		text="<p>Berikut adalah salah satu contoh dari Border dimana sisi <em>atas, kiri dan kanan</em> menggunakan warna hijau dan sisi <em>bawah</em> menggunakan warna biru putus-putus</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>klik <strong>Dimana saja</strong> untuk mengakhiri BAB 2.</p>",
		mode="standalone"
		]
	]
]
