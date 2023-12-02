<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <title>كلية إقرأ - عن الكلية</title>
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

    <!-- Header -->
    @include('layouts.header')
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp text-center" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-center text-primary px-3">عن الكلية</h6>
                    <h3 class="mb-4">نبذة تاريخية عن الكلية</h3>
                    <p class="mb-4">.قامت منظمة المجذوب الخيرية بإنشاء الكلية بتاريخ 20/1/2011م  في فداسي الحليماب  التى تبعد حوالى 17 كيلو متر شمال مدينة ودمدني على  موقع متميز مساحتة   24 فدان على طريق المرور السريع مدنى الخرطوم. وتم إجازة عدد من البرامج الاكاديمية هى  الطب والجراحة،  طب الاسنان،  الصيدلة،  المختبرات الطبية،  التمريض، الاقتصاد، العلوم الإدارية، و الدراسات الاسلامية</p>
                
                    <h3 class="mb-4">رسالة الكلية</h3>
                    <p class="mb-4">المساهمة في التنمية الاقتصادية والاجتماعية للمجتمع وذلك بتخريج طلاب متميزين ليسهموا في بناء وتنمية المجتمع مواكبين التطور التقني الذي يشهده العالم، وإجراء البحوث العلمية وخدمة المجتمع للنهوض بالمجتمعات.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الأهداف</h6>
                <h1 class="mb-5">الأهداف الاستراتيجية للكلية</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <p>تأهيل الطلاب علمياً وتربوياً لنيل الدرجات العلمية المختلفة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <p>إجراء البحوث والدراسات ذات الصلة بالتنمية الاقتصادية والاجتماعية والصحية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <p>إعداد الطلاب كقيادات عامة فكرياً وذهنياً</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <p>توطيد العلاقات بين الكلية ومؤسسات التعليم العالي والبحث العلمي داخل وخارج البلاد بغرض تبادل</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
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