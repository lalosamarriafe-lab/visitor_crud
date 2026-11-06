
<!DOCTYPE html>
<html>
<head>
    <title>Add Visitor</title>
</head>
<body>
    <h1>Add New Visitor</h1>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color:red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('visitors.store') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address') }}">
        <br><br>

        <label>Position:</label><br>
        <input type="text" name="position" value="{{ old('position') }}">
        <br><br>

        <button type="submit">Save Visitor</button>
    </form>

    <br>
    <a href="{{ route('visitors.index') }}">Back to Visitors</a>
</body>
</html>
