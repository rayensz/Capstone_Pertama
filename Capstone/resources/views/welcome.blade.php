<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Makanan Tinggi Protein <span></span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Peringkat</th>
                                                <th scope="col">Jenis Makanan</th>
                                                <th scope="col">Kandungan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="">1</a></th>
                                                <td>Dagin Dada Ayam</td>
                                                <td><a href="#" class="text-primary">100 gram dada ayam matang
                                                        mengandung 31 gram protein.</a>
                                                </td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">2</a></th>
                                                <td>Daging Sapi Tanpa Lemak</td>
                                                <td><a href="#" class="text-primary">Bagian sirloin dan panggul
                                                        sapi yang memiliki kandungan protein jauh lebih tinggi.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">3</a></th>
                                                <td>Telur</td>
                                                <td><a href="#" class="text-primary">Satu butir telur mengandung
                                                        sekitar 6 gram protein.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">4</a></th>
                                                <td>Makanan Laut</td>
                                                <td><a href="#" class="text-primar">Dalam 100 gram ikan salmon
                                                        diketahui mengandung sekitar 100 gram protein.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">5</a></th>
                                                <td>Susu dan Produk Olahan</td>
                                                <td><a href="#" class="text-primary">Satu gelas susu rendah
                                                        lemak mengandung 11 gram protein.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">6</a></th>
                                                <td>Brokoli</td>
                                                <td><a href="#" class="text-primary">Dalam 100 gram brokoli
                                                        terdapat sekitar 2,8 gram protein.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">7</a></th>
                                                <td>Kacang-kacangan</td>
                                                <td><a href="#" class="text-primary">Dalam 100 gram kacang tanah
                                                        mengandung 26 gram protein. Sementara itu, di dalam 28 gram
                                                        almond terdapat sebanyak 6 gram protein.</a></td>


                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">8</a></th>
                                                <td>Kedelai</td>
                                                <td><a href="#" class="text-primary">Terdapat 11 gram protein di
                                                        dalam 100 gram edamame yang sudah dimasak.</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="">9</a></th>
                                                <td>Tahu dan Tempe</td>
                                                <td><a href="#" class="text-primary">Tahu dan tempe adalah salah
                                                        satu makanan olahan kacang kedelai.</a></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Saran Artikel</h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/olahraga1.jpg') }}" alt="Gambar Orang Olahraga"
                                        height="100" width="200">
                                    <h4><a
                                            href="https://www.halodoc.com/artikel/dosis-olahraga-yang-dianjurkan-agar-tetap-sehat"target="blank">Dosis
                                            olahraga yang dianjurkan agar tetap sehat</a></h4>
                                    <p>Olahraga menjadi cara terbaik untuk menjaga kesehatan tubuh. Tidak hanya itu,
                                        aktivitas fisik ini dipercaya dapat membantu menurunkan berat badan.</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/makanan.jpg') }}" alt="Gambar Makanan Sehat"
                                        height="100" width="200">
                                    <h4><a href="https://www.halodoc.com/artikel/hari-gizi-nasional-ini-5-tips-terapkan-pola-makan-sehat"
                                            target="blank">Hari
                                            Gizi Nasional, Ini 5 Tips Terapkan Pola Makan Sehat </a></h4>
                                    <p>Menjaga pola makan sehat menjadi salah satu cara menjaga kesehatan tubuh secara
                                        keseluruhan. Agar hasilnya maksimal, kamu perlu menerapkannya sesuai dengan
                                        kondisi kebugaran masing-masing.
                                    </p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/olahraga2.jpg') }}" alt="" h height="100"
                                        width="200">
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
                                        height="100" width="200">
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
                                    <img src="{{ asset('img/jenis.jpg') }}" alt="" height="100"
                                        width="200">
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
                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

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
