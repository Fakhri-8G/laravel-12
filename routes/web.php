<?php

use App\Models\biodata;
use App\Models\Siswa;
use App\Models\Produk;
use App\Models\Wali;
use App\Models\Mahasiswa;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostsController; // <-- Import Method/Data dari Controller
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RelasiController;

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/', function () {
    return view('welcome', ['nama' => 'Fakhri']);
});



// ╔═══════════════════════════════╗
// ║ -- Tabel Post url{/post} --   ║
// ╚═══════════════════════════════╝

// Route::get('post', [PostsController::class, 'tampil']);

// Untuk mengakses tampilan login dan register
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostsController::class);

// ╔══════════════════════════════════════╗
// ║ -- Tabel Biodata url{/biodata} --    ║
// ╚══════════════════════════════════════╝
Route::resource('biodata', BiodataController::class);

// ╔══════════════════════════════════════╗
// ║ -- Tabel Pengguna url{/pengguna} --  ║
// ╚══════════════════════════════════════╝
Route::resource('pengguna', PenggunaController::class);


// ╔════════════════════════════════════════╗
// ║ -- Tabel One To One url{/} --          ║
// ╚════════════════════════════════════════╝
Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);

Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

// ╔════════════════════════════════════════╗
// ║ -- Tabel One To Many url{/} --          ║
// ╚════════════════════════════════════════╝
Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);

Route::get('/m-k-d', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});

// ╔════════════════════════════════════════╗
// ║ -- Tabel Many To Many url{/} --         ║
// ╚════════════════════════════════════════╝
Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);




Route::get('eloquent', [RelasiController::class, 'eloquent']);





// ╔══════════════════════════════════╗
// ║ -- Biodata url{/Bio} --          ║
// ╚══════════════════════════════════╝
// CRUD full
// Route::get('/crud', [BioController::class, 'index']); // Tabel + tambah data
// Route::get('/crud/edit/{id}', [BioController::class, 'edit']); // Form update
// Route::post('/crud', [BioController::class, 'store']); // Create
// Route::put('/crud/{id}', [BioController::class, 'update']); // Update
// Route::delete('/crud/{id}', [BioController::class, 'des']); // Delete


// ╔═════════════════════════════╗
// ║ -- produk url{/       } --  ║
// ╚═════════════════════════════╝
// Produk CRUD
// Route::get('/produk', [ProdukController::class, 'index']);      // Tabel + tambah data
// Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']); // Form update
// Route::post('/produk', [ProdukController::class, 'store']);     // Create
// Route::put('/produk/{id}', [ProdukController::class, 'update']); // Update
// Route::delete('/produk/{id}', [ProdukController::class, 'destroy']); // Delete


// Route::get('/about', function () {
//     return '<h1>Selamat Datang di Halaman About';
// });

// Route::get('/profile', function () {
//     return '<h1>Selamat Datang di Halaman Profile';
// });

// Route::get('/biodata/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{telepon}', function ($nama_lengkap, $tanggal_lahir, $jenis_kelamin, $tempat_lahir, $alamat, $agama, $telepon) {
//     return "<h1>Biodata</h1>" .
//         "Nama Lengkap : $nama_lengkap <br>" .
//         "Tanggal Lahir : $tanggal_lahir <br>" .
//         "Jenis Kelamin : $jenis_kelamin <br>" .
//         "Tempat Lahir : $tempat_lahir <br>" .
//         "Alamat : $alamat <br>" .
//         "Agama : $agama <br>" .
//         "Telepon : $telepon";
// });

// Route::get('/hitung/{b1}/{b2}', function ($b1, $b2) {
//     $hasil = $b1 + $b2;
//     return "Bilangan 1 : $b1 <br>" .
//         "Bilangan 2 : $b2 <br>" .
//         "Hasil : $hasil";
// });

// Route::get('/luas_persegi/{sisi1}/{sisi2}', function ($sisi1, $sisi2) {
//     $hasil = $sisi1 * $sisi2;
//     return
//         "<h2>Luas Persegi</h2>" .
//         "Bilangan sisi : $sisi1 <br>" .
//         "Bilangan sisi : $sisi2 <br>" .
//         "Hasil : $hasil" .
//         "<hr><br>";
// });

// Route::get('/luas_persegi_panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
//     $hasil = $panjang * $lebar;
//     return
//         "<h2>Luas Persegi Panjang</h2>" .
//         "Bilangan panjang : $panjang <br>" .
//         "Bilangan lebar : $lebar <br>" .
//         "Hasil : $hasil" .
//         "<hr><br>";
// });

// Route::get('/luas_segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
//     $hasil = 0.5 * $alas * $tinggi;
//     return
//         "<h2>Luas Segitiga</h2>" .
//         "Bilangan alas : $alas <br>" .
//         "Bilangan tinggi : $tinggi <br>" .
//         "Hasil : $hasil" .
//         "<hr><br>";
// });

// Route::get('/luas_lingkaran/{jari_jari}', function ($jari_jari) {
//     $hasil2 = $jari_jari ** 2;
//     $hasil = 3.14 * $hasil2;
//     return
//         "<h2>Luas Lingkaran</h2>" .
//         "Bilangan jari-jari : $jari_jari <br>" .
//         "Bilangan pi : 3,14 <br>" .
//         "Hasil : $hasil" .
//         "<hr><br>";
// });

// Route::get('/warung/{nama}/{nomor}/{tanggal}/{jenis}/{menu}/{jumlah}', function ($nama, $nomor, $tanggal, $jenis, $menu, $jumlah) {
//     if ($jenis == "makanan") {
//         if ($menu == "Seblak") {
//             $harga = 10000;
//         } else if ($menu == "Pentol") {
//             $harga = 15000;
//         } else if ($menu == "Batagor") {
//             $harga = 20000;
//         } else {
//             $harga = 0;
//         }
//     } else if ($jenis == "minuman") {
//         if ($menu == "Kopi") {
//             $harga = 5000;
//         } else if ($menu == "Jus") {
//             $harga = 10000;
//         } else if ($menu == "Thai tea") {
//             $harga = 15000;
//         } else {
//             $harga = 0;
//         }
//     } else {
//         $menu = "tidak ada";
//     }

//     $total = $harga * $jumlah;


//     if ($total >= 50000) {
//         $diskon = 0.1 * $total;
//     } else {
//         $diskon = 0;
//     }

//     if ($total >= 50000) {
//         $hasil = $total - $diskon;
//     } else {
//         $total;
//     }
//     $hasil = $total - $diskon;

//     return "<h2>~ Assalaam Coffe ~</h2>" .
//         "============================= <br>" .
//         "Nama Pemesan : $nama <br>" .
//         "No Telepon : $nomor <br>" .
//         "Tanggal Beli : $tanggal <br>" .
//         "Jenis : $jenis <br>" .
//         "Menu : $menu <br>" .
//         "Harga : $harga <br>" .
//         "Jumlah : $jumlah <br>" .
//         "------------------------------ <br>" .
//         "Total : $total <br>" .
//         "Diskon 10% : $diskon <br>" .
//         "Total Bayar : $hasil";
// });
// Route::get('halaman1', function () {

//     $siswa = ["Rudy", "Ipat", "Bara", "Davin", "Ilman"];

//     return view('tampil1', compact('siswa'));
// });

// Route::get('halaman2', function () {
//     $hewan_darat = ["kucing", "Belalang", "Serigala", "Domba", "Banteng", "Ayam", "Kelinci", "Panda", "Beruang", "Kadal"];
//     return view('tampil2', compact('hewan_darat'));
// });

// Route::get('halaman3', function () {
//     $hewan_terbang = ["Naga", "Capung", "Burung Kenari", "Lebah", "Kupu-kupu", "Elang", "Burung Puyuh", "Burung Gagak", "Tupai Terbang", "Kumbang"];
//     return view('tampil3', compact('hewan_terbang'));
// });



// Mengimport data dari DataBase melalui Models
// Route::get('post', function() {

// });


// menampilkan semua data
// return $post = Post::all();

// menampilkan data tertentu
// return $post = Post::where('title', 'like', 'Membangun Visi misi Sukses')->get();

// merubah data
// $post = Post::find(1);
// $post->content = "Belajar dengan lebih giat lagi";
// $post->save();
// return $post;

// menghapus data
// $post = Post::find(1);
// $post->delete();
// return $post;

// menambahkan data
// $post = new Post;
// $post->title = "Menjadi Besto Friendto yang Baik";
// $post->content = "Menjadi Besto Friendto it is Friend";
// $post->save();
// return $post;

// $post = Post::all();
// return view('halaman_post', compact('post'));

// Route::get('siswa', function () {

//     $siswa = Siswa::all();
//     return view('halaman_siswa', compact('siswa'));
// });

// Route::get('biodata', [BiodataController::class, 'tampilkan']);

// Route::get('biodata', function() {

//     $biodata = Biodata::all();
//     return $biodata;


//     // return view('halaman_biodata', compact('biodata'));
// });

// Route::get('/merah', function () {
//     return view('merah');
// });

// Route::get('/About', function() {
//     return '<h1>Halo</h1>'
//     .'Selamat datang di webapp saya<br>'
//     .'Laravel, emang keren.';
// });