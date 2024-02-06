<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm sticky-top p-0">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="img/logo.png" class="h-100" alt="logo">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">{{ __('navbar.main-page') }}</a>
                <a href="/about" class="nav-item nav-link">{{ __('navbar.about-collage') }}</a>
                <div class="nav-item dropdown">
                    <a href="/programs" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.study-program') }}  </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/programdata" class="dropdown-item">{{ __('navbar.medicine') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.pharmacy') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.dentist') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.eco') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.islamic-studies') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.nursing') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.laboratories') }}</a>
                    </div>
                </div>
                <a href="/news" class="nav-item nav-link">{{ __('navbar.news') }}</a>
                <div class="nav-item dropdown">
                    <a href="/departments" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.academic-affairs') }}  </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="/departments" class="dropdown-item">{{ __('navbar.departments') }}</a>
                        <a href="/instructors" class="dropdown-item">{{ __('navbar.instructors') }}</a>
                        <a href="/calender" class="dropdown-item">{{ __('navbar.calender') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.registrar') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.scientific-affairs') }}</a>
                        <a href="#" class="dropdown-item">{{ __('navbar.student-affairs') }}</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">{{ __('navbar.contact-us') }}</a>
            </div>
        </div>
    </div>
</nav>