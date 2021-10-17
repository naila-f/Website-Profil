@extends('footer')
@extends('header')

@section('footer')
@section('header')

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Saya</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/portfolio/5(1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Naila Febrianti</h3>
            <p class="fst-italic">
              Di bawah ini merupakan biodata singkat saya.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Tanggal Lahir:</strong> 24 Februari 2001</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Umur:</strong> 20 tahun</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Alamat:</strong> Kota Mojokerto, Jawa Timur</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>No. HP:</strong> 085732435584</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> nanafebrian24@gmail.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>IG:</strong> nailafebrian24</li>
                </ul>
              </div>
            </div>
            <p>
              Saya Naila Febrianti biasa dipanggil Naila. Umur saya 20 tahun. Saya seorang mahasiswi di salah satu perguruan tinggi negeri yang ada di Surabaya.
              Saya mengambil Jurusan Teknik Informatika Prodi S1 Pendidikan Teknologi Informasi. Saya berasal dari Kota Mojokerto
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Microsoft Word <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Microsoft Power Point <i class="val"></i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fakta</h2>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
          </div>

          <div class="col-lg-3 col-6 text-center">
            <h2>ISFJ</h2>
            <p>MBTI</p>
          </div>
          
          <div class="col-lg-3 col-6 text-center">
            <h2>Pisces</h2>
            <p>Zodiak</p>
          </div>
  
          <div class="col-lg-3 col-6 text-center">
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  </main><!-- End #main -->

  @endsection
  @endsection