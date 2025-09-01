<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<h2>Contact Form</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('file.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="file">Choose a file:</label>
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>
</body>
</html>
