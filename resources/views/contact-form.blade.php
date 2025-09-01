<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<h2>Contact Form</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contact.submit') }}" method="POST">
    @csrf
    <label>Name:</label><br>
    <input type="text" name="name" value=""><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value=""><br><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
