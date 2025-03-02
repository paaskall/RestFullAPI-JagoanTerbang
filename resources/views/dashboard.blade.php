<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JagoanTerbang API Penerbangan Terlengkap</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
  <style>
    pre {
      white-space: pre-wrap;
      word-wrap: break-word;
      overflow-x: auto;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-blue-50 to-gray-100">
  <!-- Body Wrapper -->
  <div class="grid min-h-screen" id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="fixed top-0 left-0 z-40 h-screen w-72 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out bg-white border-r border-gray-200 shadow-lg" id="sidebar">
        <!-- Sidebar scroll-->
        <div class="h-full overflow-y-auto">
            <div class="flex items-center justify-between p-4 border-b bg-gradient-to-r from-blue-600 to-indigo-700">
                <!-- Icon dan Tulisan JagoanTerbang -->
                <a href="{{ route('daftar.form') }}" class="flex items-center">
                  <i class="fas fa-plane text-white text-2xl mr-2"></i> <!-- Icon Pesawat -->
                  <span class="text-white text-xl font-bold">JagoanTerbang</span> <!-- Tulisan -->
                </a>

                <!-- Tombol Close Sidebar (Mobile) -->
                <button type="button" class="md:hidden text-white hover:text-gray-200" id="closeSidebar">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>

          <!-- Sidebar navigation-->
          <nav class="py-4 px-3">
            <div class="space-y-6">
              <!-- Home Section -->
              <div>
                <p class="px-3 text-xs font-semibold text-blue-600 uppercase tracking-wider">Home</p>
                <div class="mt-3 space-y-1">
                  <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Dashboard</span>
                  </a>
                  <a href="{{ route('dokumentasi') }}" class="flex items-center px-3 py-2 text-sm font-medium bg-blue-50 text-blue-600 rounded-md hover:bg-blue-100 transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Documentation</span>
                  </a>
                </div>
              </div>

              <!-- Auth Section -->
              <div>
                <p class="px-3 text-xs font-semibold text-blue-600 uppercase tracking-wider">AUTH</p>
                <div class="mt-3 space-y-1">
                  <a href="{{ route('login.form') }}" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Login</span>
                  </a>
                  <a href="{{ route('daftar.form') }}" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <svg class="w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Register</span>
                  </a>
                </div>
              </div>

              <!-- API Section (New) -->
              <div>
                <p class="px-3 text-xs font-semibold text-blue-600 uppercase tracking-wider">API FEATURES</p>
                <div class="mt-3 space-y-1">
                  <a href="#flights" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <i class="fas fa-plane-departure w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse"></i>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Flight Data</span>
                  </a>
                  <a href="#cities" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <i class="fas fa-city w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse"></i>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Cities API</span>
                  </a>
                  <a href="#airlines" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <i class="fas fa-ticket-alt w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse"></i>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Airlines API</span>
                  </a>
                </div>
              </div>

              <!-- Support Section (New) -->
              <div>
                <p class="px-3 text-xs font-semibold text-blue-600 uppercase tracking-wider">SUPPORT</p>
                <div class="mt-3 space-y-1">
                  <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <i class="fas fa-headset w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse"></i>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Help Center</span>
                  </a>
                  <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md hover:bg-blue-50 hover:text-blue-600 transition-all duration-200 group">
                    <i class="fas fa-code w-5 h-5 mr-2 text-blue-500 group-hover:animate-pulse"></i>
                    <span class="group-hover:translate-x-1 transition-transform duration-200">Developer Forum</span>
                  </a>
                </div>
              </div>

              <!-- Stats Section -->
              <div class="mt-6 px-3 py-4 bg-blue-50 rounded-lg">
                <div class="text-xs font-semibold text-blue-600 uppercase tracking-wider mb-2">API STATS</div>
                <div class="grid grid-cols-2 gap-2">
                  <div class="bg-white p-3 rounded-lg text-center">
                    <div class="text-2xl font-bold text-blue-600">99.9%</div>
                    <div class="text-xs text-gray-500">Uptime</div>
                  </div>
                  <div class="bg-white p-3 rounded-lg text-center">
                    <div class="text-2xl font-bold text-blue-600">500+</div>
                    <div class="text-xs text-gray-500">Developers</div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="md:ml-72 min-h-screen grid grid-rows-[auto_1fr]">
      <!--  Header Start -->
      <header class="sticky top-0 z-30 backdrop-blur-md bg-white/90 border-b border-gray-200 shadow-sm">
        <div class="flex justify-between items-center px-4 py-3">
          <div class="flex items-center">
            <button type="button" class="md:hidden text-gray-600 hover:text-gray-900" id="openSidebar">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
            <div class="hidden md:block ml-4">
              <div class="text-sm breadcrumbs text-gray-500">
                <span class="text-blue-600 font-medium">Home</span>

              </div>
            </div>
          </div>
          <!-- Right side content -->
          <div class="flex items-center space-x-4">
              <div class="hidden md:flex items-center bg-gray-100 rounded-full px-3 py-1.5 focus-within:ring-2 focus-within:ring-blue-400 transition">
                <i class="fas fa-search text-gray-500 text-sm mr-2"></i>
                <input type="text" placeholder="Search API docs..." class="bg-transparent outline-none text-sm w-48">
              </div>
              <a href="{{ route('daftar.form') }}" class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg flex items-center">
                <i class="fas fa-key mr-2"></i>
                Get API Key
              </a>
            </div>
        </div>
      </header>
      <!--  Header End -->

      <!-- Main Content -->
      <div class="grid grid-rows-[auto_1fr_auto] min-h-screen">
        <main class="p-6">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl shadow-xl mb-8 overflow-hidden">
          <div class="p-8 md:p-10 md:flex md:items-center md:justify-between">
            <div class="md:w-3/5 mb-6 md:mb-0">
              <h1 class="text-3xl md:text-4xl font-bold text-white mb-4 animate__animated animate__fadeIn">JagoanTerbang API</h1>
              <p class="text-blue-100 text-lg animate__animated animate__fadeIn animate__delay-1s">
                Platform API penerbangan Indonesia untuk developer yang ingin <br> membuat aplikasi dengan data penerbangan terlengkap.
              </p>
              <div class="mt-6 flex flex-wrap gap-4 animate__animated animate__fadeIn animate__delay-2s">
                <a href="{{ route('daftar.form') }}" class="inline-flex items-center bg-white text-blue-700 hover:bg-blue-50 font-semibold px-5 py-3 rounded-lg transition-colors duration-200">
                  <i class="fas fa-rocket mr-2"></i> Mulai Gratis
                </a>
                <a href="{{ route('dokumentasi') }}" class="inline-flex items-center bg-transparent border border-white text-white hover:bg-white hover:bg-opacity-10 font-semibold px-5 py-3 rounded-lg transition-colors duration-200">
                  <i class="fas fa-book mr-2"></i> Lihat Dokumentasi
                </a>
              </div>
            </div>
            <div class="md:w-2/5 flex justify-center">
              <div class="relative animate__animated animate__fadeInRight">
                <svg class="w-72 h-72 text-white opacity-10 absolute -top-10 -right-10" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.59,13.41l-7.17,7.17c-0.39,0.39-1.02,0.39-1.41,0L2.83,11.41c-0.39-0.39-0.39-1.02,0-1.41l7.17-7.17C10.57,2.83,11.04,2.73,11.46,2.87L11.88,2.92c0.53,0.1,0.91,0.55,0.91,1.09v5.84c0,0.04,0.01,0.09,0.04,0.12c0.03,0.03,0.08,0.04,0.12,0.04h5.84c0.54,0,0.99,0.38,1.09,0.91l0.05,0.41c0.14,0.42,0.04,0.88-0.24,1.16L19.41,12V12.01c0.39,0.39,0.39,1.02,0,1.41L20.59,13.41z"/>
                </svg>
                <img src="{{ asset ('adm/src/assets/images/logos/airplane.png') }}" alt="Flight API Illustration" class="relative z-10 rounded-lg shadow-2xl">
              </div>
            </div>
          </div>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-200 border-t-4 border-blue-500">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
              <i class="fas fa-bolt text-blue-600 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">API Cepat & Handal</h3>
            <p class="text-gray-600">
              Response time kurang dari 200ms dengan uptime 99.9%. Server kami siap menangani jutaan request.
            </p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-200 border-t-4 border-indigo-500">
            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
              <i class="fas fa-code text-indigo-600 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Integrasi Mudah</h3>
            <p class="text-gray-600">
              Format JSON yang kompatibel dengan semua bahasa pemrograman. Tersedia SDK untuk PHP, JavaScript, Python & Go.
            </p>
          </div>

          <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow duration-200 border-t-4 border-purple-500">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
              <i class="fas fa-database text-purple-600 text-xl"></i>
            </div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Data Lengkap</h3>
            <p class="text-gray-600">
              Akses data dummy maskapai, bandara, rute, harga, dan jadwal penerbangan yang diperbaharui secara berkala.
            </p>
          </div>
        </div>

        <!-- Main Content Card -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
              <i class="fas fa-paper-plane text-blue-600 mr-3"></i>
              Selamat Datang di JagoanTerbang
            </h2>
            <div class="prose max-w-none text-gray-700">
              <p class="text-lg">
                Halo Developer! JagoanTerbang menyediakan RESTful API (Application Programming Interface) yang dapat Anda gunakan untuk membuat berbagai aplikasi yang membutuhkan data penerbangan.
              </p>
              <p>
                Meskipun menggunakan data dummy, API kami dirancang untuk mensimulasikan data penerbangan nyata dengan sangat akurat, sehingga sempurna untuk:
              </p>
              <ul class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-2">
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Aplikasi pencarian penerbangan</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Dashboard tracking pesawat</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Proyek pendidikan & portfolio</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Prototipe aplikasi travel</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Integrasi website perbandingan harga</span>
                </li>
                <li class="flex items-start">
                  <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                  <span>Chatbot asisten perjalanan</span>
                </li>
              </ul>

              <div class="mt-6 p-5 bg-gray-50 rounded-lg border border-gray-200">
                <h3 class="text-lg font-semibold mb-3 text-gray-800">Contoh JSON Response</h3>
                <pre class="bg-gray-900 text-green-400 p-4 rounded-md overflow-x-auto text-sm">
{
  "status": "success",
  "data": {
    "flights": [
      {
        "id": "GA-421",
        "airline": "Garuda Indonesia",
        "departure": {
          "airport": "Soekarno-Hatta (CGK)",
          "time": "08:25",
          "city": "Jakarta"
        },
        "arrival": {
          "airport": "Ngurah Rai (DPS)",
          "time": "11:15",
          "city": "Bali"
        },
        "duration": "1h 50m",
        "price": 1250000
      }
    ]
  }
}</pre>
              </div>

              <p class="mt-6">
                JagoanTerbang sangat mudah diintegrasikan karena menggunakan arsitektur REST dengan format balasan berupa JSON yang didukung oleh hampir semua bahasa pemrograman modern.
              </p>

              <p>
                Bayangkan kemampuan untuk membuat fitur pencarian dan perbandingan tiket pesawat di aplikasi mobile untuk Android, iOS, Progressive Web App, atau bahkan layanan chatbot WhatsApp!
              </p>
            </div>

            <div class="mt-8 flex flex-col sm:flex-row sm:items-center justify-between p-6 bg-blue-50 rounded-xl border border-blue-100">
              <div>
                <h4 class="text-lg font-semibold text-blue-800">Sudah Punya Ide Aplikasi?</h4>
                <p class="text-blue-700 mt-1">Daftar akun untuk mendapatkan API Key GRATIS!</p>
              </div>
              <a href="{{ route('daftar.form') }}" class="mt-4 sm:mt-0 inline-flex items-center px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                Daftar Sekarang
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Testimonials Section -->
        <div class="mt-8 p-6 bg-indigo-700 rounded-xl shadow-lg">
          <h2 class="text-2xl font-bold text-white mb-6 text-center">Testimoni Developer</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg p-5">
              <div class="flex items-center mb-4">
                <img src="{{ asset ('adm/src/assets/images/logos/boy.png') }}" alt="Developer" class="w-10 h-10 rounded-full mr-3">
                <div>
                  <h4 class="font-semibold">Budi Setiawan</h4>
                  <p class="text-sm text-gray-500">Mobile Developer</p>
                </div>
              </div>
              <p class="text-gray-600">"API JagoanTerbang sangat mudah diintegrasikan ke aplikasi Android kami. Dokumentasinya lengkap dan response time-nya cepat!"</p>
              <div class="mt-3 flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>

            <div class="bg-white rounded-lg p-5">
              <div class="flex items-center mb-4">
                <img src="{{ asset ('adm/src/assets/images/logos/woman.png') }}" alt="Developer" class="w-10 h-10 rounded-full mr-3">
                <div>
                  <h4 class="font-semibold">Siti Aminah</h4>
                  <p class="text-sm text-gray-500">Web Developer</p>
                </div>
              </div>
              <p class="text-gray-600">"Saya gunakan JagoanTerbang untuk project kuliah dan dosen sangat terkesan dengan kemampuan website kami menampilkan data penerbangan realtime."</p>
              <div class="mt-3 flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>

            <div class="bg-white rounded-lg p-5">
              <div class="flex items-center mb-4">
                <img src="{{ asset ('adm/src/assets/images/logos/profile.png') }}" alt="Developer" class="w-10 h-10 rounded-full mr-3">
                <div>
                  <h4 class="font-semibold">Rudi Hartono</h4>
                  <p class="text-sm text-gray-500">Startup Founder</p>
                </div>
              </div>
              <p class="text-gray-600">"Berkat JagoanTerbang, kami bisa membuat MVP dalam 2 minggu dan mendapatkan seed funding untuk startup travel tech kami!"</p>
              <div class="mt-3 flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
          <div class="bg-white rounded-lg p-6 text-center shadow-md">
            <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
            <div class="text-gray-600">Developer Aktif</div>
          </div>
          <div class="bg-white rounded-lg p-6 text-center shadow-md">
            <div class="text-3xl font-bold text-blue-600 mb-2">50 juta+</div>
            <div class="text-gray-600">API Requests/bulan</div>
          </div>
          <div class="bg-white rounded-lg p-6 text-center shadow-md">
            <div class="text-3xl font-bold text-blue-600 mb-2">99.9%</div>
            <div class="text-gray-600">Uptime</div>
          </div>
          <div class="bg-white rounded-lg p-6 text-center shadow-md">
            <div class="text-3xl font-bold text-blue-600 mb-2">< 200ms</div>
            <div class="text-gray-600">Response Time</div>
          </div>
        </div>
      </main>

      <footer class="bg-white border-t border-gray-200 py-6 px-4">
        <div class="container mx-auto">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0">
              <div class="text-indigo-700 font-bold text-lg flex items-center">
                <i class="fas fa-paper-plane mr-2"></i>
                JagoanTerbang
              </div>
              <p class="text-gray-600 text-sm mt-1">API Penerbangan untuk Developers Indonesia</p>
            </div>
            <div class="flex space-x-4">
              <a href="https://github.com/jagoanterbang" aria-label="GitHub" class="text-gray-600 hover:text-indigo-700 transition-colors duration-200">
                <i class="fab fa-github text-lg"></i>
              </a>
              <a href="https://twitter.com/jagoanterbang" aria-label="Twitter" class="text-gray-600 hover:text-indigo-700 transition-colors duration-200">
                <i class="fab fa-twitter text-lg"></i>
              </a>
              <a href="https://linkedin.com/company/jagoanterbang" aria-label="LinkedIn" class="text-gray-600 hover:text-indigo-700 transition-colors duration-200">
                <i class="fab fa-linkedin text-lg"></i>
              </a>
            </div>
          </div>
          <div class="mt-6 text-center text-gray-500 text-sm">
            &copy; 2025 JagoanTerbang. All rights reserved.
          </div>
        </div>
    </footer>
    </div>
    </div>
  </div>

  <script>
    // Simple sidebar toggle functionality
    document.getElementById('openSidebar').addEventListener('click', function() {
      document.getElementById('sidebar').classList.remove('-translate-x-full');
    });

    document.getElementById('closeSidebar').addEventListener('click', function() {
      document.getElementById('sidebar').classList.add('-translate-x-full');
    });
  </script>
