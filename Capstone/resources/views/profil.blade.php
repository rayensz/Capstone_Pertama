<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
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
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('img/Abe.jpg') }}" alt="Profile" height="150" width="150"
                    class="rounded-circle">
                <h2>Norick Maurid Abe Sibarani</h2>
                <div class="social-links mt-2">
                    <a href="https://github.com/abesibarani" target="blank" class="github"><i
                            class="bi bi-github"></i></a>
                    <a href="https://www.instagram.com/abesibarani/" target="blank" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/norick-maurid-abe-sibarani-356367256/" target="blank"
                        class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('img/Ryan.jpg') }}" alt="Profile" height="150" width="150"
                    class="rounded-circle">
                <h2>Ryan Sulistiawan Haryanto</h2>
                <div class="social-links mt-2">
                    <a href="https://www.facebook.com/ryan.sulistiawan/" target="blank" class="facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ryansulistiawan_/" target="blank" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/ryan-sulistiawan-haryanto-364b49261/" target="blank"
                        class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('img/Safrylia.png') }}" alt="Profile" height="150" width="150"
                    class="rounded-circle">
                <h2>Safrylia Dyah Pramitha</h2>
                <div class="social-links mt-2">
                    <a href="#" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/safrylia_?igshid=MzNlNGNkZWQ4Mg==" target="blank"
                        class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="{{ asset('img/Araselly.jpeg') }}" alt="Profile" height="150" width="150"
                    class="rounded-circle">
                <h2>Araselly Agnes Pramudiawati</h2>
                <div class="social-links mt-2">
                    <a href="https://twitter.com/APramudiawati19" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/arasellyyyy/" class="instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>


        </div>
        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

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
