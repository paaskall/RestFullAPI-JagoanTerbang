<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

    <!-- Success Message -->
    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
      </div>
    @endif

    <!-- Error Message -->
    @if (session('error'))
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <!-- Username Field -->
      <div class="mb-6">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
        <div class="flex items-center border-b-2 border-gray-300 focus-within:border-indigo-500 transition-colors duration-200">
          <i class="fas fa-user text-gray-500 mr-3"></i>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Type your username"
            required
            value="{{ old('name') }}"
            class="w-full py-2 outline-none text-gray-700"
          />
        </div>
        @if ($errors->has('name'))
          <div class="text-red-500 text-sm mt-2">{{ $errors->first('name') }}</div>
        @endif
      </div>

      <!-- Password Field -->
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
        <div class="flex items-center border-b-2 border-gray-300 focus-within:border-indigo-500 transition-colors duration-200">
          <i class="fas fa-key text-gray-500 mr-3"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Type your password"
            required
            class="w-full py-2 outline-none text-gray-700"
          />
        </div>
        @if ($errors->has('password'))
          <div class="text-red-500 text-sm mt-2">{{ $errors->first('password') }}</div>
        @endif
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition-colors duration-200">
        Login
      </button>
    </form>
  </div>
</body>
</html>
