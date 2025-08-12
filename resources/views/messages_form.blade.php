<!DOCTYPE html>
<html>
<head>
    <title>Add Message</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1 class="mb-4">Add a New Message</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Message:</label>
            <textarea name="message" class="form-control" required></textarea>
        </div>

        <button class="btn btn-primary">Submit</button>
    </form>

    <a href="{{ route('messages.index') }}" class="btn btn-secondary mt-3">View Messages</a>

</body>
</html>
