<!DOCTYPE html>
<html>
<head>
    <title>Data from API</title>
</head>
<body>
    <h1>Data from API</h1>

    @if(isset($error))
        <p>Error: {{ $error }}</p>
    @else
        <ul>
            @foreach($data as $item)
                <li>{{ $item['name'] }}</li> <!-- Adjust this according to the structure of your API response -->
            @endforeach
        </ul>
    @endif
</body>
</html>
