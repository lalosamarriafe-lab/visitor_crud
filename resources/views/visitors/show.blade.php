
<!DOCTYPE html>
<html>
<head>
    <title>Visitor Details</title>
</head>
<body>
    <h1>Visitor Details</h1>

    <p><strong>Name:</strong> {{ $visitor->name }}</p>
    <p><strong>Address:</strong> {{ $visitor->address }}</p>
    <p><strong>Position:</strong> {{ $visitor->position }}</p>

    <a href="{{ route('visitors.edit', $visitor->id) }}">Edit Visitor</a>
    <br><br>
    <a href="{{ route('visitors.index') }}">Back to Visitors</a>
</body>
</html>
