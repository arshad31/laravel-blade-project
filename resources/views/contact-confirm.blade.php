<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
</head>
<body>
@if ($successMessage)
    <p style="color: green;">{{ $successMessage }}</p>
@endif

<h2>Submitted Data</h2>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Message:</strong> {{ $formData['message'] }}</p>

<a href="{{ route('contact.form') }}">Go back</a>
</body>
</html>
