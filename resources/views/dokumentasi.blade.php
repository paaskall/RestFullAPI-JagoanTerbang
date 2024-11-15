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
          <a href="{{ route('daftar.form')}}" class="text-nowrap logo-img">
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
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Jagoan Terbang</h5>
            <p class="mb-0">Selamat datang Developer! JagoanTerbang menyediakan RESTful API (Application Programming Interface) yang dapat  Anda pakai untuk membuat berbagai macam aplikasi yang membutuhkan data penerbangan, setiap end point wajib menggunakan Api Key! <a  href="{{ route('daftar.form') }}">Daftar sekarang</a> untuk mendapatkan Api Key, sudah punya akun? <a  href="{{ route('login.form') }}">masuk </a> untuk mendapatkan Api Key </p>

            <br>
            <div class="alert alert-secondary" role="alert">
                <code><a  href="{{ route('login.form') }}">API Token</a></code><br>
                @if (session('token'))
                    <p>API Key Anda: <span id="api-token">{{ session('token') }}</span></p>
                    <button onclick="copyToClipboard()" class="btn btn-primary">Copy</button>
                @endif
            </div>

            <script>
            function copyToClipboard() {
                var copyText = document.getElementById("api-token").textContent;
                navigator.clipboard.writeText(copyText).then(function() {
                    alert("API Key berhasil disalin!");
                }, function(err) {
                    alert("Gagal menyalin API Key: ", err);
                });
            }
            </script>

          </div>
        </div>
      </div>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-4">Flights 1 <br><code>GET</code></h4>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <div class="alert alert-secondary" role="alert">
                    <code>URL</code><br>/api/penerbangan
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Headers</code><br>Authorization : Bearer -Your Api Key- <br> Accept : Application/Json
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Example</code><br><pre>
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:8000/api/penerbangan",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $token",
        "Content-Type: application/json"
    ),
));
</pre>
                  </div>
                  <div class="alert alert-light" role="alert">
                    <code>Response</code><br><pre>
"status": true,
"message": "Flights found",
"data": [
        {
            "id": 1,
            "Date_of_Journey": "1/28/1988",
            "source": "Sibolga",
            "destination": "Bontang",
            "Transit": "Ambon",
            "dep_time": "20:05:51",
            "Arrival_time": "7:42:41",
            "Airline": "Lion Air",
            "price": 425828
        },
        {
            "id": 2,
            "Date_of_Journey": "1/6/2024",
            "source": "Tanjung Pinang",
            "destination": "Pangkal Pinang",
            "Transit": "Dumai",
            "dep_time": "6:19:57",
            "Arrival_time": "3:19:02",
            "Airline": "Lion Air",
            "price": 646031
        }
    ]</pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-4">City <br><code>GET</code></h4>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <div class="alert alert-secondary" role="alert">
                    <code>URL</code><br>/api/cities
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Headers</code><br>Authorization : Bearer -Your Api Key- <br> Accept : Application/Json
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Example</code><br><pre>
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:8000/api/city",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $token",
        "Content-Type: application/json"
    ),
));
</pre>
                  </div>
                  <div class="alert alert-light" role="alert">
                    <code>Response</code><br><pre>
"status": true,
"message": "Flights found",
"data": [
        {
            "id": 1,
            "city": "Mataram",
            "kode": "MTRM"
        },
        {
            "id": 2,
            "city": "Bengkulu",
            "kode": "BKL"
        }
    ]</pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-4">Airline <br><code>GET</code></h4>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <div class="alert alert-secondary" role="alert">
                    <code>URL</code><br>/api/airlines
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Headers</code><br>Authorization : Bearer -Your Api Key- <br> Accept : Application/Json
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Example</code><br><pre>
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:8000/api/airlines",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $token",
        "Content-Type: application/json"
    ),
));
</pre>
                  </div>
                  <div class="alert alert-light" role="alert">
                    <code>Response</code><br><pre>
"status": true,
"message": "Flights found",
"data": [
        {
            "id": 1,
            "airline": "Lion Air"
        },
        {
            "id": 2,
            "airline": "Garuda Ind"
        },
        {
            "id": 3,
            "airline": "Super Jet"
        }
    ]</pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title fw-semibold mb-4">Flights 2 <br><code>GET</code></h4>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <div class="alert alert-secondary" role="alert">
                    <code>URL</code><br>/api/penerbangan/destination-airline?destination=Makassar&airline=Batik Air&source=Jakarta
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Headers</code><br>Authorization : Bearer -Your Api Key- <br> Accept : Application/Json
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Params</code><br>Source : Required <br> Destination : Required <br> Airline : Required <br>
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <code>Example</code><br><pre>
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://127.0.0.1:8000/api/penerbangan",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $token",
        "Content-Type: application/json"
    ),
));
</pre>
                  </div>
                  <div class="alert alert-light" role="alert">
                    <code>Response</code><br><pre>
    "status": true,
    "message": "Flights found with source Jakarta, destination Makassar and airline Batik Air",
    "data": [
        {
            "id": 4344,
            "Date_of_Journey": "5/27/2008",
            "source": "Jakarta",
            "destination": "Makassar",
            "Transit": "Tegal",
            "dep_time": "18:12:30",
            "Arrival_time": "4:40:55",
            "Airline": "Batik Air",
            "price": 779599
        }
    ]</pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
