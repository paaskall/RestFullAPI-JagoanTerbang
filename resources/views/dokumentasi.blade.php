<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JagoanTerbang API Documentation</title>
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

    .gradient-text {
      background: linear-gradient(90deg, #3b82f6, #6366f1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .bg-grid-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.05' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='1'/%3E%3Ccircle cx='13' cy='13' r='1'/%3E%3C/g%3E%3C/svg%3E");
    }

    .fly-in {
      animation: flyInRight 0.8s ease-out;
    }

    @keyframes flyInRight {
      0% {
        opacity: 0;
        transform: translateX(50px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .endpoint-card {
      transition: all 0.3s ease;
    }

    .endpoint-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .code-window {
      border-radius: 0.5rem;
      position: relative;
    }

    .gradient-text {
      background: linear-gradient(90deg, #3b82f6, #6366f1);
      -webkit-background-clip: text;
    }

  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#eef2ff',
              100: '#e0e7ff',
              200: '#c7d2fe',
              300: '#a5b4fc',
              400: '#818cf8',
              500: '#6366f1',
              600: '#4f46e5',
              700: '#4338ca',
              800: '#3730a3',
              900: '#312e81',
            }
          },
          animation: {
            'bounce-slow': 'bounce 3s infinite',
            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          }
        }
      }
    }
  </script>
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
    <div class="md:ml-72 min-h-screen grid grid-rows-[auto_1fr_auto]">
        <!-- Header Start -->
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
                  <span>Home</span>
                  <span class="mx-2">/</span>
                  <span class="text-blue-600 font-medium">API Documentation</span>
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
        <!-- Header End -->

        <!-- Main Content -->
        <main class="p-6">
          <!-- Welcome Card -->
          <div class="bg-white rounded-xl shadow-lg mb-6 overflow-hidden">
            <div class="grid md:grid-cols-5">
              <div class="md:col-span-3 p-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 gradient-text">Jagoan Terbang API</h2>
                <p class="text-gray-600 mb-4">
                  Selamat datang Developer! JagoanTerbang menyediakan RESTful API yang kuat dan mudah diintegrasikan untuk aplikasi yang membutuhkan data penerbangan lengkap. Akses data penerbangan, kota, dan maskapai secara real-time!
                </p>
                <p class="text-gray-600 mb-4">
                  Setiap endpoint wajib menggunakan API Key!
                  <a href="{{ route('daftar.form') }}" class="text-indigo-600 hover:text-indigo-800 font-medium hover:underline">Daftar sekarang</a> untuk mendapatkan API Key. Sudah punya akun?
                  <a href="{{ route('login.form') }}" class="text-indigo-600 hover:text-indigo-800 font-medium hover:underline">Masuk</a> untuk mendapatkan API Key.
                </p>

                <!-- API Token Section -->
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-4">
                  <div class="flex items-center mb-2">
                    <i class="fas fa-key text-blue-500 mr-2"></i>
                    <div class="font-medium text-blue-900">API Authentication</div>
                  </div>
                  @if (session('token'))
                  <div class="flex flex-wrap items-center gap-2">
                    <p class="text-gray-700">API Key Anda: <span id="api-token" class="font-mono text-sm bg-gray-200 p-1 px-2 rounded">{{ session('token') }}</span></p>
                    <button onclick="copyToClipboard()" class="px-3 py-1 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition shadow flex items-center">
                      <i class="fas fa-copy mr-1"></i> Copy
                    </button>
                  </div>
                  @else
                  <div class="flex items-center">
                    <a href="{{ route('login.form') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition shadow flex items-center">
                      <i class="fas fa-sign-in-alt mr-2"></i> Login untuk API Key
                    </a>
                  </div>
                  @endif
                </div>
              </div>
              <div class="md:col-span-2 bg-gradient-to-br from-blue-600 to-indigo-700 p-8 flex items-center justify-center hidden md:flex">
                <div class="relative w-full max-w-xs">
                  <div class="absolute -top-16 -right-16 w-32 h-32 bg-white/10 rounded-full animate-pulse-slow"></div>
                  <div class="absolute -bottom-20 -left-10 w-40 h-40 bg-white/10 rounded-full animate-pulse-slow" style="animation-delay: 1s;"></div>
                  <div class="relative z-10 bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 shadow-2xl fly-in">
                    <div class="text-white font-bold mb-3">
                      <i class="fas fa-rocket mr-2"></i>
                      Mulai Cepat
                    </div>
                    <div class="font-mono text-xs text-blue-100 mb-3">
                      $ curl -H "Authorization: Bearer API_KEY" \<br>
                      &nbsp;&nbsp;&nbsp;https://api.jagoanterbang.com/airlines
                    </div>
                    <a href="#quickstart" class="block w-full bg-white/20 hover:bg-white/30 text-white text-center py-2 rounded-lg text-sm font-medium transition-colors mt-4">
                      Pelajari Lebih Lanjut →
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Quick Features -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center text-center hover:shadow-lg transition-shadow duration-300">
              <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-bolt text-blue-600 text-2xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Cepat & Responsif</h3>
              <p class="text-gray-600">Respons cepat dengan rata-rata waktu respons 80ms untuk semua endpoint.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center text-center hover:shadow-lg transition-shadow duration-300">
              <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Aman & Terpercaya</h3>
              <p class="text-gray-600">Semua permintaan API dienkripsi dengan HTTPS dan autentikasi token.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center text-center hover:shadow-lg transition-shadow duration-300">
              <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-code text-blue-600 text-2xl"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Mudah Diintegrasikan</h3>
              <p class="text-gray-600">Dokumentasi lengkap dengan contoh kode di berbagai bahasa pemrograman.</p>
            </div>
          </div>

          <!-- Quick Start Guide -->
          <!-- Quick Start Guide -->
<div id="quickstart" class="bg-white rounded-xl shadow-lg mb-8 overflow-hidden">
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4">
      <h3 class="text-xl font-bold text-white flex items-center">
        <i class="fas fa-paper-plane mr-2"></i>
        Panduan Mulai Cepat
      </h3>
    </div>
    <div class="p-6">
      <div class="grid md:grid-cols-2 gap-6">
        <!-- Left Column: Steps -->
        <div>
          <!-- Step 1 -->
          <div class="mb-6">
            <div class="flex items-center mb-2">
              <div class="w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-600 font-bold rounded-full mr-3">1</div>
              <h4 class="text-lg font-semibold text-gray-800">Dapatkan API Key</h4>
            </div>
            <p class="text-gray-600 ml-11">
              Register dan login untuk mendapatkan API key unik Anda. API key diperlukan untuk semua request.
            </p>
            <div class="ml-11 mt-2">
              <a href="{{ route('daftar.form') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition shadow">
                <i class="fas fa-key mr-2"></i>
                Daftar Sekarang
              </a>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="mb-6">
            <div class="flex items-center mb-2">
              <div class="w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-600 font-bold rounded-full mr-3">2</div>
              <h4 class="text-lg font-semibold text-gray-800">Gunakan Authorization Header</h4>
            </div>
            <p class="text-gray-600 ml-11">
              Tambahkan header <code class="bg-gray-100 p-1 rounded">Authorization: Bearer YOUR_API_KEY</code> di setiap request.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="mb-6">
            <div class="flex items-center mb-2">
              <div class="w-8 h-8 flex items-center justify-center bg-blue-100 text-blue-600 font-bold rounded-full mr-3">3</div>
              <h4 class="text-lg font-semibold text-gray-800">Buat Request Pertama Anda</h4>
            </div>
            <p class="text-gray-600 ml-11">
              Cobalah endpoint <code class="bg-gray-100 p-1 rounded">/api/airlines</code> untuk mendapatkan daftar maskapai sebagai langkah pertama!
            </p>
          </div>
        </div>

        <!-- Right Column: Code Example -->
        <div class="code-window relative bg-gray-800 rounded-lg overflow-hidden pt-6">
          <div class="code-dots"></div>
          <pre class="font-mono text-sm text-gray-100 p-4 pt-2 rounded overflow-x-auto">
  # Menggunakan cURL
  curl -X GET "https://api.jagoanterbang.com/api/penerbangan" \
       -H "Authorization: Bearer YOUR_API_KEY" \
       -H "Accept: application/json"

  # Menggunakan Python
  import requests

  url = "https://api.jagoanterbang.com/api/penerbangan"
  headers = {
      "Authorization": "Bearer YOUR_API_KEY",
      "Accept": "application/json"
  }

  response = requests.get(url, headers=headers)
  print(response.json())</pre>
          <div class="absolute bottom-4 right-4">
            <button onclick="copyCode()" class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition shadow flex items-center">
              <i class="fas fa-copy mr-1"></i> Copy Code
            </button>
          </div>
        </div>
      </div>

      <!-- Additional Tips -->
      <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
        <div class="flex items-center">
          <i class="fas fa-lightbulb text-blue-600 mr-2"></i>
          <h4 class="text-lg font-semibold text-blue-800">Tips Penting</h4>
        </div>
        <ul class="list-disc list-inside text-gray-600 mt-2">
          <li>Gunakan <code class="bg-gray-100 p-1 rounded">Accept: application/json</code> untuk memastikan respons dalam format JSON.</li>
          <li>Simpan API key Anda dengan aman dan jangan bagikan ke pihak lain.</li>
          <li>Gunakan environment variable untuk menyimpan API key Anda.</li>
        </ul>
      </div>
    </div>
  </div>

          <!-- API Documentation Sections -->
          <h3 class="text-2xl font-bold text-gray-800 mb-6 gradient-text">Endpoint API Reference</h3>

          <div class="space-y-6">
            <!-- Flights -->
            <div id="flights" class="bg-white rounded-xl shadow-lg endpoint-card">
                <div class="p-6">
                  <div class="flex items-start justify-between mb-6">
                    <div>
                      <div class="flex items-center">
                        <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded mr-3">GET</span>
                        <h4 class="text-xl font-semibold text-gray-800">Flight Data</h4>
                      </div>
                      <p class="text-gray-500 mt-1 ml-12">Mendapatkan daftar penerbangan yang tersedia</p>
                    </div>
                    <span class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">
                      <i class="fas fa-check-circle mr-1"></i> No Auth Rate Limits
                    </span>
                  </div>

                  <!-- Endpoint Info Grid -->
                  <div class="grid md:grid-cols-12 gap-4 mb-6">
                    <!-- URL Column -->
                    <div class="md:col-span-4 bg-gray-50 p-4 rounded-lg">
                      <div class="text-xs font-semibold text-gray-500 uppercase mb-2">ENDPOINT URL</div>
                      <div class="flex items-center">
                        <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200 flex-grow">/api/penerbangan</div>
                        <button onclick="copyEndpoint('/api/penerbangan')" class="ml-2 p-2 text-blue-600 hover:bg-blue-50 rounded">
                          <i class="fas fa-copy"></i>
                        </button>
                      </div>
                    </div>

                    <!-- Headers Column -->
                    <div class="md:col-span-8 bg-gray-50 p-4 rounded-lg">
                      <div class="text-xs font-semibold text-gray-500 uppercase mb-2">REQUIRED HEADERS</div>
                      <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                          Authorization: Bearer YOUR_API_KEY
                        </div>
                        <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                          Accept: application/json
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tabs -->
                  <div class="mb-4 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                      <li class="mr-2">
                        <a onclick="showTab('flights', 'example')" class="flights-tab-example inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active">Example</a>
                      </li>
                      <li class="mr-2">
                        <a onclick="showTab('flights', 'response')" class="flights-tab-response inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Response</a>
                      </li>
                      <li class="mr-2">
                        <a onclick="showTab('flights', 'parameters')" class="flights-tab-parameters inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Parameters</a>
                      </li>
                    </ul>
                  </div>

                  <!-- Tab Content -->
                  <div class="flights-tab-content">
                    <!-- Example Tab -->
                    <div id="flights-example" class="p-4 bg-gray-50 rounded-lg">
                      <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
# Menggunakan cURL
curl -X GET "https://api.jagoanterbang.com/api/penerbangan" \
     -H "Authorization: Bearer YOUR_API_KEY" \
     -H "Accept: application/json"

# Menggunakan Python
import requests

url = "https://api.jagoanterbang.com/api/penerbangan"
headers = {
        "Authorization": "Bearer YOUR_API_KEY",
        "Accept": "application/json"
        }

response = requests.get(url, headers=headers)
print(response.json())</pre>
                    </div>

                    <!-- Response Tab -->
                    <div id="flights-response" class="p-4 bg-gray-50 rounded-lg hidden">
                      <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
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
                            ]<</pre>
                    </div>

                    <!-- Parameters Tab -->
                    <div id="flights-parameters" class="p-4 bg-gray-50 rounded-lg hidden">
                      <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                          <thead>
                            <tr>
                              <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Parameter</th>
                              <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Type</th>
                              <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                            </tr>
                            <tr>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                            </tr>
                            <tr>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                              <td class="px-4 py-2 border-b border-gray-200">-</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Cities -->
            <div id="cities" class="bg-white rounded-xl shadow-lg endpoint-card">
              <div class="p-6">
                <div class="flex items-start justify-between mb-6">
                  <div>
                    <div class="flex items-center">
                      <span class="px-2 py-1 text-xs font-semibold text-blue-800 bg-blue-100 rounded mr-3">GET</span>
                      <h4 class="text-xl font-semibold text-gray-800">Cities Data</h4>
                    </div>
                    <p class="text-gray-500 mt-1 ml-12">Mendapatkan daftar kota yang tersedia</p>
                  </div>
                  <span class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">
                    <i class="fas fa-check-circle mr-1"></i> No Auth Rate Limits
                  </span>
                </div>

                <!-- Endpoint Info Grid -->
                <div class="grid md:grid-cols-12 gap-4 mb-6">
                  <!-- URL Column -->
                  <div class="md:col-span-4 bg-gray-50 p-4 rounded-lg">
                    <div class="text-xs font-semibold text-gray-500 uppercase mb-2">ENDPOINT URL</div>
                    <div class="flex items-center">
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200 flex-grow">/api/cities</div>
                      <button onclick="copyEndpoint('/api/cities')" class="ml-2 p-2 text-blue-600 hover:bg-blue-50 rounded">
                        <i class="fas fa-copy"></i>
                      </button>
                    </div>
                  </div>

                  <!-- Headers Column -->
                  <div class="md:col-span-8 bg-gray-50 p-4 rounded-lg">
                    <div class="text-xs font-semibold text-gray-500 uppercase mb-2">REQUIRED HEADERS</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                        Authorization: Bearer YOUR_API_KEY
                      </div>
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                        Accept: application/json
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tabs -->
                <div class="mb-4 border-b border-gray-200">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                      <a onclick="showTab('cities', 'example')" class="cities-tab-example inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active">Example</a>
                    </li>
                    <li class="mr-2">
                      <a onclick="showTab('cities', 'response')" class="cities-tab-response inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Response</a>
                    </li>
                    <li class="mr-2">
                      <a onclick="showTab('cities', 'parameters')" class="cities-tab-parameters inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Parameters</a>
                    </li>
                  </ul>
                </div>

                <!-- Tab Content -->
                <div class="cities-tab-content">
                  <!-- Example Tab -->
                  <div id="cities-example" class="p-4 bg-gray-50 rounded-lg">
                    <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
# Menggunakan cURL
curl -X GET "https://api.jagoanterbang.com/api/cities" \
     -H "Authorization: Bearer YOUR_API_KEY" \
     -H "Accept: application/json"

# Menggunakan Python
import requests

url = "https://api.jagoanterbang.com/api/cities"
headers = {
    "Authorization": "Bearer YOUR_API_KEY",
    "Accept": "application/json"
}

response = requests.get(url, headers=headers)
print(response.json())</pre>
                  </div>

                  <!-- Response Tab -->
                  <div id="cities-response" class="p-4 bg-gray-50 rounded-lg hidden">
                    <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
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

                  <!-- Parameters Tab -->
                  <div id="cities-parameters" class="p-4 bg-gray-50 rounded-lg hidden">
                    <div class="overflow-x-auto">
                      <table class="min-w-full bg-white">
                        <thead>
                          <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Parameter</th>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Type</th>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Airlines -->
            <div id="airlines" class="bg-white rounded-xl shadow-lg endpoint-card">
              <div class="p-6">
                <div class="flex items-start justify-between mb-6">
                  <div>
                    <div class="flex items-center">
                      <span class="px-2 py-1 text-xs font-semibold text-purple-800 bg-purple-100 rounded mr-3">GET</span>
                      <h4 class="text-xl font-semibold text-gray-800">Airlines Data</h4>
                    </div>
                    <p class="text-gray-500 mt-1 ml-12">Mendapatkan daftar maskapai penerbangan</p>
                  </div>
                  <span class="text-xs font-medium text-purple-600 bg-purple-50 px-2 py-1 rounded-full">
                    <i class="fas fa-check-circle mr-1"></i> No Auth Rate Limits
                  </span>
                </div>

                <!-- Endpoint Info Grid -->
                <div class="grid md:grid-cols-12 gap-4 mb-6">
                  <!-- URL Column -->
                  <div class="md:col-span-4 bg-gray-50 p-4 rounded-lg">
                    <div class="text-xs font-semibold text-gray-500 uppercase mb-2">ENDPOINT URL</div>
                    <div class="flex items-center">
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200 flex-grow">/api/maskapai</div>
                      <button onclick="copyEndpoint('/api/maskapai')" class="ml-2 p-2 text-purple-600 hover:bg-purple-50 rounded">
                        <i class="fas fa-copy"></i>
                      </button>
                    </div>
                  </div>

                  <!-- Headers Column -->
                  <div class="md:col-span-8 bg-gray-50 p-4 rounded-lg">
                    <div class="text-xs font-semibold text-gray-500 uppercase mb-2">REQUIRED HEADERS</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                        Authorization: Bearer YOUR_API_KEY
                      </div>
                      <div class="font-mono text-sm bg-white p-2 rounded border border-gray-200">
                        Accept: application/json
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Tabs -->
                <div class="mb-4 border-b border-gray-200">
                  <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                      <a onclick="showTab('airlines', 'example')" class="airlines-tab-example inline-block p-4 text-purple-600 border-b-2 border-purple-600 rounded-t-lg active">Example</a>
                    </li>
                    <li class="mr-2">
                      <a onclick="showTab('airlines', 'response')" class="airlines-tab-response inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Response</a>
                    </li>
                    <li class="mr-2">
                      <a onclick="showTab('airlines', 'parameters')" class="airlines-tab-parameters inline-block p-4 text-gray-500 hover:text-gray-600 border-b-2 border-transparent rounded-t-lg hover:border-gray-300">Parameters</a>
                    </li>
                  </ul>
                </div>

                <!-- Tab Content -->
                <div class="airlines-tab-content">
                  <!-- Example Tab -->
                  <div id="airlines-example" class="p-4 bg-gray-50 rounded-lg">
                    <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
# Menggunakan cURL
curl -X GET "https://api.jagoanterbang.com/api/maskapai" \
     -H "Authorization: Bearer YOUR_API_KEY" \
     -H "Accept: application/json"

# Menggunakan Python
import requests

url = "https://api.jagoanterbang.com/api/maskapai"
headers = {
    "Authorization": "Bearer YOUR_API_KEY",
    "Accept": "application/json"
}

response = requests.get(url, headers=headers)
print(response.json())</pre>
                  </div>

                  <!-- Response Tab -->
                  <div id="airlines-response" class="p-4 bg-gray-50 rounded-lg hidden">
                    <pre class="font-mono text-sm text-gray-700 bg-white p-4 rounded overflow-x-auto">
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

                  <!-- Parameters Tab -->
                  <div id="airlines-parameters" class="p-4 bg-gray-50 rounded-lg hidden">
                    <div class="overflow-x-auto">
                      <table class="min-w-full bg-white">
                        <thead>
                          <tr>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Parameter</th>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Type</th>
                            <th class="px-4 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                          <tr>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                            <td class="px-4 py-2 border-b border-gray-200">-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- Main Content End -->

        <!-- Footer Start -->
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
        <!-- Footer End -->
      </div>
    </div>

    <!-- Scripts -->
    <script>
      // Function to handle tab switching
  function showTab(section, tab) {
    // Hide all tab contents
    document.querySelectorAll(`.${section}-tab-content > div`).forEach(el => {
      el.classList.add('hidden');
    });

    // Remove active class from all tabs
    document.querySelectorAll(`.${section}-tab-example, .${section}-tab-response, .${section}-tab-parameters`).forEach(el => {
      el.classList.remove('active', 'text-blue-600', 'border-blue-600');
      el.classList.add('text-gray-500', 'border-transparent');
    });

    // Show the selected tab content
    document.getElementById(`${section}-${tab}`).classList.remove('hidden');

    // Add active class to the selected tab
    document.querySelector(`.${section}-tab-${tab}`).classList.add('active', 'text-blue-600', 'border-blue-600');
    document.querySelector(`.${section}-tab-${tab}`).classList.remove('text-gray-500', 'border-transparent');
  }

  // Set default tab to Example
  document.addEventListener('DOMContentLoaded', () => {
    showTab('flights', 'example');
    showTab('cities', 'example');
    showTab('airlines', 'example');
  });

      // Function to copy endpoint to clipboard
      function copyEndpoint(endpoint) {
        navigator.clipboard.writeText(endpoint).then(() => {
          alert('Endpoint copied to clipboard!');
        });
      }

      // Function to copy API token to clipboard
      function copyToClipboard() {
        const apiToken = document.getElementById('api-token').innerText;
        navigator.clipboard.writeText(apiToken).then(() => {
          alert('API Key copied to clipboard!');
        });
      }

      // Sidebar toggle for mobile
      const sidebar = document.getElementById('sidebar');
      const openSidebarButton = document.getElementById('openSidebar');
      const closeSidebarButton = document.getElementById('closeSidebar');

      openSidebarButton.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
      });

      closeSidebarButton.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
      });
    </script>
  </body>
</html>
