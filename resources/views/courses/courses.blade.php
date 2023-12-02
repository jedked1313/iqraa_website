<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <title>كلية إقرأ - المناهج</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
    <!-- Spinner loading -->
    @include('components.spinner')

    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">البرامج الدراسية</h6>
                <h1 class="mb-5">انواع البرامج الدراسية</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Medical.svg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 8px;">إقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">بكالوريوس الطب والجراحة</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>49 عدد الكورسات</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>3000 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Pharmacist.svg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 8px;">إقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">بكالوريوس الصيدلة</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>49 عدد الكورسات</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2000 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Laboratory.svg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 8px;">إقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">بكالوريوس المختبرات</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>49 عدد الكورسات</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1500 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/Finance.svg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 8px;">إقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">بكالوريوس الاقتصاد والدراسات المصرفية</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>49 عدد الكورسات</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1500 طالب</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/nursing.svg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 8px;">إقرأ المزيد</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">بكالوريوس التمريض</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>49 عدد الكورسات</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>1500 طالب</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->

    <!-- Footer -->
    @include('layouts.footer')
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


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