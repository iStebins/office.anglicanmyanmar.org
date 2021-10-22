
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="https://app.anglicanmyanmar.org/logocpm.png" rel="icon">
  <link href="https://app.anglicanmyanmar.org/logocpm.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
        <img src="https://app.anglicanmyanmar.org/logocpm.png" alt="">
        <span class="d-none d-lg-block">CPM Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        

        

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link  {{ Request::segment(1) == 'dashboard' ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- End News Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'news' ? '' : 'collapsed' }}" data-bs-target="#news-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-newspaper"></i><span>News</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="news-nav" class="nav-content collapse {{ Request::segment(1) == 'news' ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('news.index') }}">
              <i class="bi bi-circle"></i><span>All News</span>
            </a>
          </li>
          <li>
            <a href="{{ route('news.create') }}">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End News Nav -->

      <!-- End Parishes Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'parishes' ? '' : 'collapsed' }}" data-bs-target="#parishes-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-church"></i><span>Parishes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="parishes-nav" class="nav-content collapse {{ Request::segment(1) == 'parishes' ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('parishes.index') }}">
              <i class="bi bi-circle"></i><span>All Parishes</span>
            </a>
          </li>
          <li>
            <a href="{{ route('parishes.create') }}">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Parishes Nav -->

      <!-- End Magazines Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'magazines' ? '' : 'collapsed' }}" data-bs-target="#magazines-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-pen"></i><span>Magazines</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="magazines-nav" class="nav-content collapse {{ Request::segment(1) == 'magazines' ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('magazines.index') }}">
              <i class="bi bi-circle"></i><span>All Magazines</span>
            </a>
          </li>
          <li>
            <a href="{{ route('magazines.create') }}">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Magazines Nav -->

      <!-- End Employees Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::segment(1) == 'employees' ? '' : 'collapsed' }}" data-bs-target="#employees-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="employees-nav" class="nav-content collapse {{ Request::segment(1) == 'employees' ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('news.index') }}">
              <i class="bi bi-circle"></i><span>All Employees</span>
            </a>
          </li>
          <li>
            <a href="{{ route('news.create') }}">
              <i class="bi bi-circle"></i><span>Add Clergy</span>
            </a>
            <a href="{{ route('news.create') }}">
              <i class="bi bi-circle"></i><span>Add Staff</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Employees Nav -->

      <!-- End Departments Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-columns"></i>
          <span>Departments</span>
        </a>
      </li>
      <!-- End Departments Nav -->

      <!-- End Positions Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-award-fill"></i>
          <span>Positions</span>
        </a>
      </li>
      <!-- End Positions Nav -->

      <!-- End Ethnicities Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-circle-half"></i>
          <span>Ethnicities</span>
        </a>
      </li>
      <!-- End Ethnicities Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <form method="post" action="{{ route('logout') }}">
          @csrf
          <a class="nav-link collapsed" onclick="this.parentNode.submit();">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Logout</span>
          </a>
        </form>

      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

        @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>AnglicanMyanmar.org</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> &
      Developed by <a href="https://stephen.vip">Stephen</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>