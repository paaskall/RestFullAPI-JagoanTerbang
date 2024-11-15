<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JagoanTerbang</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset ('adm/src/assets/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{ route ('daftar.form') }}" class="text-nowrap logo-img">
            <img src="{{ asset ('adm/src/assets/images/logos/favicon.png') }}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dokumentasi') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Documentation</span>
                </a>
              </li>
              <li class="sidebar-item">
              </li>
              <li class="sidebar-item">
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">AUTH</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('login.form') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Login</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('daftar.form') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-plus"></i>
                  </span>
                  <span class="hide-menu">Register</span>
                </a>
              </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Jagoan Terbang</h5>
            <p class="mb-0">Selamat datang Developer! JagoanTerbang menyediakan RESTful API (Application Programming Interface) yang dapat  Anda pakai untuk membuat berbagai macam aplikasi yang membutuhkan data penerbangan, data penerbangan hanya data dummy. JagoanTerbang mudah untuk diintegrasikan karena menggunakan arsitektur REST dengan format balasan berupa JSON yang didukung oleh hampir semua bahasa pemrograman. Bayangkan Anda bisa membuat fitur hitung data penerbangan di  aplikasi mobile untuk android, iOS, dan lain-lain. Sudah dapat ide untuk membuat aplikasi dengan JagoanTerbang Silakan daftar akun untuk mendapatkan API Key, GRATIS! </p>
          </div>
        </div>
    </div>
  </div>
  <script src="{{ asset ('adm/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset ('assets/js/app.min.js') }}"></script>
  <script src="{{ asset ('assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>
