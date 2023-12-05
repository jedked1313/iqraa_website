<!DOCTYPE html>
<html lang="ar" dir="rtl">

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

    <!-- Start Header -->
    <div dir="ltr" class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">برنامج الطب و الجراحه</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">الرئيسية</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="/about">البرامج</li>
                            <li class="breadcrumb-item text-white active" aria-current="/about">برنامج الطب و الجراحه</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Program Data Start -->
    <div class="container-xxl pt-1">
        <div class="container">
            <div class="text-center wow fadeInUp mb-3" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">برنامج الطب و الجراحه</h6>
            </div>
            <div class="row my-3">
                <button id="vision" class="program-buttons col btn btn-outline-primary mx-1 my-2 active" type="button">رؤية البرنامج</button>
                <button id="goals" class="program-buttons col btn btn-outline-primary mx-1 my-2" type="button">أهداف البرنامج</button>
                <button id="message" class="program-buttons col btn btn-outline-primary mx-1 my-2" type="button">رساله البرنامج</button>
                <button id="board" class="program-buttons col btn btn-outline-primary mx-1 my-2" type="button">لوحة البرنامج</button>
                <button id="teachers" class="program-buttons col btn btn-outline-primary mx-1 my-2" type="button">هيئة التدريس</button>
                <button id="req" class="program-buttons col btn btn-outline-primary mx-1 my-2" type="button">شروط القبول</button>
            </div>
            <div class="testimonial-text bg-light text-center p-4">
                <p id="vision" class="fs-4 lh-lg program-p">
                    الوصول إلى أعلى مستوى من التميز العلمي في مجال التعليم الطبي والبحث وخدمة المجتمع.
                </p>
                <p id="message" class="fs-4 lh-lg program-p d-none">
                    المشاركة في تنمية المجتمع وتعزيزه من خلال التعليم الطبي عالي الجودة والخدمات الصحية والأبحاث ذات الصلة التي تهدف إلى حل المشكلات الصحية للمجتمع.
                </p>
                <div id="board" class="program-p d-none" style="height: 35rem;">
                    <iframe height="100%" width="100%" src="pdf/medicine-board.pdf"></iframe>
                </div>
                <p id="goals" class="fs-4 lh-lg program-p d-none">
                    - المشاركة في تقديم الخدمات الصحية.<br>
                    - المشاركة في تدريب المهنيين الصحيين.<br>
                    - إجراء البحوث العلمية لحل مشاكل صحة المجتمع.<br>
                    - المساهمة في تطوير التعليم الطبي في الدولة والمنطقة.<br>
                    - إعداد وتأهيل وتخريج الأطباء القادرين على العمل في مجالات الطب المختلفة.
                </p>
                <p id="req" class="fs-4 lh-lg program-p d-none">
                    يُرشح للبرنامج  مَن توفرت فيه الشروط التالية : -
                    <br>استيفاء شروط القبول العامة لمكتب القبول الموحد بوزارة التعليم  العالي والبحث العلمي.
                    <br>اجتياز الطالب الكشف الطبي والمعاينة وأي مطلوبات أخري خاصة بالكلية.
                </p>
            </div>
        </div>
    </div>
    <!-- Program Data Start -->

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