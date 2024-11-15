<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>JagoanTerbang</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
</head>
<body>
    <header>
        <h1>JagoanTerbang</h1>
        <p>Teman terbang terbaik anda</p>
    </header>

    <form action="{{ route('search') }}" method='get'>
        @csrf
        <div>
            <label for="source">Asal:</label>
            <select id="source" name="source" required>
                <option value="">Pilih asal</option>
                @foreach($data as $item)
                    <option value="{{ $item['source'] }}">{{ $item['source'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="destination">Nama tujuan:</label>
            <select id="destination" name="destination" required>
                <option value="">Pilih Nama tujuan</option>
                @foreach($data as $item)
                    <option value="{{ $item['destination'] }}">{{ $item['destination'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Cari</button>
        </div>
    </form>

    @if(isset($results))
        @if(empty($results))
            <p>Hasil tidak ditemukan</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Transit</th>
                        <th>Maskapai</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                        <tr>
                            <td>{{ $result['source'] }}</td>
                            <td>{{ $result['destination'] }}</td>
                            <td>{{ $result['transit'] }}</td>
                            <td>{{ $result['airline'] }}</td>
                            <td>{{ $result['price'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif

    <script>
        document.getElementById('akun-menu').addEventListener('click', function(event) {
          event.stopPropagation();
          var dropdown = document.getElementById('user-dropdown');
          dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });

        document.querySelector('.menu-item > a').addEventListener('click', function(event) {
          event.stopPropagation();
          var dropdown = document.getElementById('integrasi-dropdown');
          dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });

        window.onclick = function(event) {
          var userDropdowns = document.querySelectorAll(".user-dropdown");
          userDropdowns.forEach(function(dropdown) {
            if (dropdown.style.display === 'block') {
              dropdown.style.display = 'none';
            }
          });
          var dropdowns = document.querySelectorAll(".dropdown");
          dropdowns.forEach(function(dropdown) {
            if (dropdown.style.display === 'block') {
              dropdown.style.display = 'none';
            }
          });
        };
    </script>
</body>
</html>
