<!DOCTYPE html>
<html>

<head>
    <title>Test Portfolio Upload</title>
</head>

<body>
    <h1>Test Portfolio Upload</h1>

    <form method="POST" action="/test-portfolio-upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Test Upload to Portfolios</button>
    </form>

    @if (isset($success))
        <h2>Results:</h2>
        <pre>{{ json_encode($results, JSON_PRETTY_PRINT) }}</pre>

        @if ($success)
            <h3>Test the image:</h3>
            <a href="{{ $results['asset_url'] }}" target="_blank">{{ $results['asset_url'] }}</a>
            <br><br>
            <img src="{{ $results['asset_url'] }}" alt="Test image" style="max-width: 300px;">
        @endif
    @endif
</body>

</html>
