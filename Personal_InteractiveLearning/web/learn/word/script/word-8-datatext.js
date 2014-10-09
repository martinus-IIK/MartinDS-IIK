//Tutorial TEXT Array & View Mode Declaration
//mode = continue -> will continue last statement on 'instruksi'
//mode = standalone -> will create new statement on 'instruksi'
var wInstruksiText = 
[
	[
		[	//1.Screen Lembar Kerja
		text="<p>Kita dapat mencetak halaman yang telah selesai menjadi berbagai bentuk, baik bentuk nyata <strong>kertas</strong>, ataupun bentuk lain seperti <strong>PDF, XPS, dll</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Untuk mulai mencetak, tekan Menu Ribbon <strong>File</strong>.</p>",
		mode="standalone"
		],
		[	//2.
		text="<p>Kita dapat mencetak halaman yang telah selesai menjadi berbagai bentuk, baik bentuk nyata <strong>kertas</strong>, ataupun bentuk lain seperti <strong>PDF, XPS, dll</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Sekarang, pilih <strong>Print</strong>.</p>",
		mode="standalone"
		],
		[	//3.
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Tombol Print :</strong> untuk mencetak dokumen</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi tombol <strong>Print</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//4.
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Print - Copies : :</strong> menentukan jumlah dokumen yang akan dicetak.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Print - Copies</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//5
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Printer :</strong> memilih jenis printer yang akan digunakan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Printer</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//6
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Settings -> Print selection :</strong> mencetak halaman tertentu yang sudah diseleksi atau di <strong>blok</strong>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Print selection</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//7
		text="<p><strong>Print selection</strong> memberikan kebebasan akan apa yang ingin kita print<br><strong>Print Current Page : </strong> akan mencetak halaman yang aktif di layar.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Print Current Page</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//8
		text="<p><strong>Print selection</strong> memberikan kebebasan akan apa yang ingin kita print<br><strong>Print Custom Range : </strong> untuk menentukan halaman tertentu yang akan dicetak.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Print Custom Range</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//9
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Collate :</strong> untuk mengatur susunan pencetakan.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Print selection</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//10
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Orientation :</strong> untuk mengatur kertas <em>portrait</em> atau <em>landscape</em>.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Orientation</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//11
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Paper Size :</strong> untuk mengatur ukuran kertas.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Paper size</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//12.
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Margin :</strong> untuk mengatur batas atas, bawah, kiri dan kanan pada kertas.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Margin</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//13
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Page per Sheet :</strong> untuk menentukan jumlah halaman per lembar kertas.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Page per Sheet</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//14
		text="<p>Keterangan dari fungsi-fungsi yang ada di bawah adalah :<br><strong>Page Setup :</strong> untuk melakukan pengaturan halaman lebih lanjut.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik lokasi <strong>Page Setup</strong> untuk melihat fungsinya.</p>",
		mode="standalone"
		],
		[	//15
		text="<p><strong>Page Setup - Margins </strong> berfungsi untuk mengatur garis batas dan orientasi kertas.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tab <strong>Paper</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//16
		text="<p><strong>Page Setup - Paper </strong> berfungsi untuk mengatur paper-size.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tab <strong>Layout</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//17
		text="<p><strong>Page Setup - Layout </strong> berfungsi untuk mengatur tampilan umum.</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik <strong>OK</strong> untuk melanjutkan.</p>",
		mode="standalone"
		],
		[	//18
		text="<p>Demikian tutorial dari <strong>Print</strong> telah selesai. Silahkan kembali mengulangi tutorial bila ada yang kurang jelad</p><p style='text-align:center;background:#FBEED0;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:20px'>Klik tombol <strong>Print</strong> untuk mulai mencetak dan mengakhiri tutorial.</p>",
		mode="standalone"
		]
	]
]

