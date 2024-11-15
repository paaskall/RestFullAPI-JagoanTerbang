<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
  <div class="container">
    <h2 class="t-center">Login</h2>
    @if (session('success'))
      <div class="success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
      <div class="error">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="inputDiv">
        <label for="name" class="username">Username</label>
        <div class="userArea">
          <i class="fa-solid fa-user"></i>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Type your username"
            required
            value="{{ old('name') }}"
          />
        </div>
        @if ($errors->has('name'))
          <div class="error">{{ $errors->first('name') }}</div>
        @endif
        <hr />
      </div>
      <div class="inputDiv">
        <label for="password" class="username">Password</label>
        <div class="userArea">
          <i class="fa-solid fa-key"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Type your password"
            required
          />
        </div>
        @if ($errors->has('password'))
          <div class="error">{{ $errors->first('password') }}</div>
        @endif
        <hr />
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>
