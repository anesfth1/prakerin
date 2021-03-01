<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;
class Provinsi extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
	{
		$this->table = 'provinsis';
		$this->filename = base_path().'/database/seeders/csvs/provinsi.csv';
        $this->timestams=true;
	}

    public function run()
    {
        // Recommended when importing larger CSVs
		DB::disableQueryLog();

		// Uncomment the below to wipe the table clean before populating
		// DB::table($this->table)->truncate();

		parent::run();
    }
}


// <section id="services" class="services">
//       <div class="container">
//         <div class="section-title">
//           <h2>Artikel</h2>
//           <p>Temukan berbagai informasi kesehatan terkini dari sumber terpercaya.</p>
//         </div>

//         <div class="row">
//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/anak.webp')}}" width="320" height="180" alt="Berita"></div>
//               <h6><a href="https://www.halodoc.com/artikel/jangan-panik-ini-cara-mengobati-radang-amandel-pada-anak">Jangan Panik, Ini Cara Mengobati Radang Amandel pada Anak</a></h6>
//               <p>Radang amandel adalah salah satu gangguan yang terbilang rentan terjadi pada anak-anak.</p>
//             </div>
//           </div>

//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/anak2.webp')}}" width="320" height="180" alt="Berita"></div>
//               <h6><a href="https://www.halodoc.com/artikel/5-cara-menyapih-anak-agar-tidak-rewel">5 Cara Menyapih Anak Agar Tidak Rewel</a></h6>
//               <p>Bagi beberapa ibu, menyapih anak tidak pernah menjadi hal yang mudah dilakukan.</p>
//             </div>
//           </div>

//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/olahraga.webp')}}" width="320" height="180" alt="Berita"></div>
//               <h6><a href="https://www.halodoc.com/artikel/super-sibuk-ini-7-jenis-olahraga-yang-bisa-dilakukan-di-kantor">Super Sibuk? Ini 7 Jenis Olahraga yang Bisa Dilakukan di Kantor</a></h6>
//               <p>Seribu satu dalih menjadi alasan pekerja kantoran untuk meninggalkan olahraga. </p>
//             </div>
//           </div>

//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/hidup.webp')}}" width="320" height="180" alt="Berita"></div>
//               <h6><a href="https://www.halodoc.com/artikel/faktor-lingkungan-penyebab-penuaan-dini">Faktor Lingkungan Penyebab Penuaan Dini</a></h6>
//               <p>Seiring bertambahnya usia, pasti ada saja perubahan pada tubuh yang dapat terjadi.</p>
//             </div>
//           </div>

//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/ibu.webp')}}" width="320" height="180" alt="Berita"></i></div>
//               <h6><a href="https://www.halodoc.com/artikel/pentingnya-menjaga-kesehatan-mental-saat-hamil">Pentingnya Menjaga Kesehatan Mental saat Hamil</a></h6>
//               <p>Setiap wanita hamil wajib memperhatikan kesehatannya secara keseluruhan, baik dari fisik maupun mental.</p>
//             </div>
//           </div>

//           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
//             <div class="icon-box">
//               <div class="icon"><img src="{{asset('assets/assets/img/artikel/banjir2.webp')}}" width="320" height="180" alt="Berita"></div>
//               <h6><a href="https://www.halodoc.com/artikel/musim-banjir-bisakah-corona-menular-lewat-air">Musim Banjir, Bisakah Corona Menular Lewat Air?</a></h6>
//               <p>Banjir tengah melanda sejumlah wilayah di Indonesia. Di tengah pandemi virus corona yang masih terjadi.</p>
//             </div>
//           </div>

//         </div>

//       </div>
//     </section>