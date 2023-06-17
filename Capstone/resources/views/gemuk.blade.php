<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('partials.navbar')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('partials.slidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Layouts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Kalkulator</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    @if (session()->has('hasil'))
                        <div class="alert alert-success" role="alert">
                            {{ session('hasil') }}
                        </div>
                    @endif
                    @if (session()->has('hasil1'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('hasil1') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title"> Selamat Datang Pada Kalkulator BMI</h5>
                            <!-- Vertical Form -->

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#verticalycentered">
                                Periksa BMI
                            </button>
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Vertically Centered</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/hasilperhitungan" method="POST">
                                                @csrf
                                                <form class="row g-3">
                                                    <div class="col-12">
                                                        <label for="berat" class="form-label">Berat Badan</label>
                                                        <input type="number" min="30" class="form-control"
                                                            id="berat" name="berat">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="tinggi" class="form-label">Tinggi Badan (Dalam
                                                            Meter)</label>
                                                        <input type="text" class="form-control" id="tinggi"
                                                            name="tinggi">
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                                    </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Vertical Form -->

                        </div>

                    </div>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/plank.jpeg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Plank</h5>
                                    <p>Latihan kekuatan merupakan bagian penting dari program diet, karena dapat
                                        membantu mempertahankan massa otot dan meningkatkan metabolisme.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/angkatbeban2.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Angkat Beban</h5>
                                    <p>Mengangkat beban selama 30 menit dapat membakar 112 kalori pada orang dengan
                                        berat badan 70 kilogram dan juga dapat memperkuat dan merangsang pertumbuhan
                                        otot.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/berenang3.jpg') }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Berenang</h5>
                                    <p>Setiap orang yang memiliki berat badan 70 kilogram yang melakukan renang gaya
                                        punggung dapat membakar sekitar 298 kalori per 30 menit.</p>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Saran Artikel</h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/olahraga1.jpg') }}" alt="Gambar Orang Olahraga"
                                        height="200" width="300">
                                    <h4><a
                                            href="https://www.halodoc.com/artikel/dosis-olahraga-yang-dianjurkan-agar-tetap-sehat"target="blank">Dosis
                                            olahraga yang dianjurkan agar tetap sehat</a></h4>
                                    <p>Olahraga menjadi cara terbaik untuk menjaga kesehatan tubuh. Tidak hanya itu,
                                        aktivitas fisik ini dipercaya dapat membantu menurunkan berat badan.</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/makanan.jpg') }}" alt="Gambar Makanan Sehat"
                                        height="200" width="300">
                                    <h4><a href="https://www.halodoc.com/artikel/hari-gizi-nasional-ini-5-tips-terapkan-pola-makan-sehat"
                                            target="blank">Hari
                                            Gizi Nasional, Ini 5 Tips Terapkan Pola Makan Sehat </a></h4>
                                    <p>Menjaga pola makan sehat menjadi salah satu cara menjaga kesehatan tubuh secara
                                        keseluruhan. Agar hasilnya maksimal, kamu perlu menerapkannya sesuai dengan
                                        kondisi kebugaran masing-masing.
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/olahraga2.jpg') }}" alt="" height="200"
                                        width="300">
                                    <h4><a href="https://rsudkertosono.nganjukkab.go.id/web2/artikel/5-langkah-mudah-menuju-pola-hidup-sehat"
                                            target="blank">5
                                            langkah mudah menuju hidup sehat</a></h4>
                                    <p>Pola hidup sehat sebaiknya dijalankan sejak dini agar terhindar dari berbagai
                                        serangan penyakit. Penyakit yang mengintai akibat pola hidup yang buruk antara
                                        lain diabetes, gagal ginjal, kanker, maupun penyakit kardiovaskular seperti
                                        stroke, darah tinggi, dan jantung.
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/motivasi.jpg') }}" alt="Gambar Orang Olahraga"
                                        height="200" width="300">
                                    <h4><a href="https://hellosehat.com/kebugaran/tips-olahraga/meningkatkan-motivasi-olahraga/"
                                            target="blank">11 Tips Motivasi Diri supaya Lebih Rajin Berolahraga</a>
                                    </h4>
                                    <p>
                                        Memulai berolahraga memang merupakan suatu hal yang sulit dilakukan. Orang-orang
                                        yang sudah rutin melakukannya bahkan masih bisa kehilangan motivasi dan malas
                                        untuk memulai olahraga setelah lama berhenti.
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/jenis.jpg') }}" alt="" height="200"
                                        width="300">
                                    <h4><a href="https://hellosehat.com/kebugaran/jenis-olahraga/"
                                            target="blank">Jenis-Jenis Olahraga dan Manfaatnya untuk Kesehatan</a>
                                    </h4>
                                    <p>Ada berbagai cara untuk menjaga kebugaran tubuh dan kesehatan mental, salah
                                        satunya dengan berolahraga. Terdapat beberapa jenis olahraga yang lebih disukai
                                        oleh banyak orang di Indonesia. </p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div>




        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>C23-M4049</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    {{-- </footer><!-- End Footer --> --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
