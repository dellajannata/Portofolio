@extends('layouts.main')
@section('layouts.content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in" >
      <h1 >Selamat Datang</h1>
      <p>Saya <span class="typed" data-typed-items="Della Jannata Febiana"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Saya</h2>
          <p>Saya mahasiswa dari Jurusan Teknologi Informasi di Politeknik Negeri Malang. </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/della.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span>Della Jannata Febiana</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 858 1637 4705</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Kediri, Jawa Timur</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>dellajannata2112@gmail.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kemampuan</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
                <span class="skill">MySQL<i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
        
            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Politeknik Negeri Malang</h4>
              <h5>2020 - 2024</h5>
              <p><em>D4 - Teknik Informatika</em></p>
              <p>Saat ini, saya sedang menjalani semester 6 di Politeknik Negeri Malang</p>
            </div>
            <div class="resume-item">
              <h4>SMAN 1 Kutorejo</h4>
              <h5>2017 - 2020</h5>
              <p><em>IPA</em></p>
            </div>

        
                <h3 class="resume-title">Sertifikasi</h3>
                <div class="resume-item">
                  <h4>Junior Web Developer</h4>
                  <h5>11/2022 - 11/2025</h5>
                  <p><em>Badan Nasional Sertifikasi Profesi (BNSP)</em></p>
                </div>

          </div>
          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Pengalaman</h3>
            <div class="resume-item">
                <h4>Divisi Pemrograman</h4>
                <h5>12/2022 - 01/2023</h5>
                <p><em>Website SD</em></p>
                <ul>
                  <li>Projek saat ini yaitu membuat website profile salah satu SD yang terdapat di Gresik. Dalam membangun website ini, saya selaku tim dari divisi pemrograman menggunakan framewok laravel dalam proses pengembangan. Di mana website ini terdiri dari halaman untuk pengguna dan halaman admin. Untuk tugas saya adalah sebagai backend dalam mengolah data untuk admin.</li>
                </ul>
              </div>
            <div class="resume-item">
                <h4>Divisi Pemrograman</h4>
                <h5>10/2022 - 11/2022</h5>
                <p><em>Sistem Manajemen Kebab Ayu Kediri</em></p>
                <ul>
                  <li>Projek ini terdapat 3 hak akses untuk admin cabang Kebab Ayu Kediri, admin gudang, dan admin pusat. Di mana sistem ini dapat memantau seluruh aktivitas baik transaksi maupun kebutuhan bahan baku. Dan saya selaku divisi pemrograman bertanggung jawab dalam pembuatan website sebagai backend.</li>
                </ul>
              </div>
            <div class="resume-item">
              <h4>Finalis KMIPN 4 ( Cipta Inovasi )</h4>
              <h5>08/2022 - 08/2022</h5>
              <p><em>Rancang Bangun Sistem Informasi Tes Mata untuk Penderita Miopia dan Hipermetropia</em></p>
              <ul>
                <li>Pada sistem ini, saya selaku divisi pemrograman yaitu membuat beberapa rancangan interface untuk tes mata.</li>
              </ul>
            </div>
            <div class="resume-item">
                <h4>Divisi Pemrograman</h4>
                <h5>04/2022 - 05/2022</h5>
                <p><em>Website furniture </em></p>
                <ul>
                  <li>Pada projek ini, saya selaku divisi pemrograman bertanggung jawab sebagai backend untuk mengolah database, dsb.</li>
                </ul>
              </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portofolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-mobile">Mobile</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                <a href="https://kebabayu.trixsite.com" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                <a href="https://kebabayu.trixsite.com" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                <a href="https://kebabayu.trixsite.com" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/m1.jpeg" class="img-fluid" alt="" style="width:200px;height:300px;">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/m1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mob 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/web2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/web2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
            <div class="portfolio-wrap">
              <img src="assets/img/portofolio/m2.jpeg" class="img-fluid" alt="" style="width:200px;height:300px;">
              <div class="portfolio-links">
                <a href="assets/img/portofolio/m2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mob 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Kediri, Jawa Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>dellajannata2112@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>+62 858 1637 4705</p>
              </div>
            </div>

          </div>

         
        </div>

      </div>
    </section><!-- End Contact Section -->
  </main>
  @endsection