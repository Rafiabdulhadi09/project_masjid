<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Website Masjid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        @include('layout.user.navbar')
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"><span class="text-primary">Assalamualaikum...</span></h1> <h2>Selamat Datang di website masjid Raya Panjalu</h2>
                    <p class="animated fadeIn mb-4 pb-2">Alamat : V798+MG5, Panjalu, Kec. Panjalu, Kabupaten Ciamis, Jawa Barat 46264</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/putra.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/jami.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row justify-content-center">

                        <div class="table-responsive">
                            <div class="text-center mb-4 text-white">
                                <h1 class="text-white">JADWAL SHOLAT</h1>
                                <p>Kecamatan Panjalu, Kabupaten Ciamis, Jawa Barat 46253 · Januari 2025</p>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h2><b>Waktu Sekarang: <span id="current-time"></span></b></h2>
                                    <table class="table table-striped table-bordered table text-center">
                                        <thead>
                                            <tr>
                                                <th>Subuh</th>
                                                <th>Dzuhur</th>
                                                <th>Asar</th>
                                                <th>Magrib</th>
                                                <th>Isya</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <td>{{ $jadwalAzan['Fajr'] }}</td>
                                           <td>{{ $jadwalAzan['Dhuhr'] }}</td>
                                           <td>{{ $jadwalAzan['Asr'] }}</td>
                                           <td>{{ $jadwalAzan['Maghrib'] }}</td>
                                           <td>{{ $jadwalAzan['Isha'] }}</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- Search End -->
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Berita Online Masjid</h1>
                            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">Berita</h5>
                                        <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus laudantium illum vero excepturi aliquid dolores rerum molestiae sapiente a quasi, aut soluta est odio! Quas quia nostrum fugiat reiciendis dolorem.</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <a href="#" class="flex-fill text-center border-end py-2">Lihat Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/qr.webp" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
        <!-- Testimonial Start -->
       <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-3">Lokasi Masjid Raya Panjalu</h1>
                <p>Alamat Masjid Besar Panjalu berada di Jalan Raya Kaum No. 02, Dusun Cimendung, RT. 11 RW. 06, Desa Panjalu, Kabupaten Ciamis, Jawa Barat. </p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="mb-4">
                    <iframe 
                        class="map-frame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63343.93650202744!2d108.263787!3d-7.1308513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f466a3a24033d%3A0x18710ba20c766c63!2sMasjid%20Raya%20Situ%20Panjalu!5e0!3m2!1sid!2sid!4v1700000000000"
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .map-frame {
        width: 100%; 
        height: 300px; 
        border: 0; 
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .map-frame {
            height: 400px; /* Sesuaikan untuk tampilan mobile */
        }
    }
</style>

        
        <!-- Testimonial End -->
        @include('layout.user.footer')
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script>
        function updateTime() {
            var currentTime = new Date().toLocaleTimeString();

            document.getElementById('current-time').textContent = currentTime;
        }

        setInterval(updateTime, 1000);

        updateTime();
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>