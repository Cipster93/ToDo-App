<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('style/home.style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/newtask.style.css') }}">
    <title>ToDo App</title>
</head>
<body>
    <nav class="nav-bar">
        <a href="{{ route('home.page') }}">Home</a>
        <a href="{{ route('newTask.page') }}">New Task</a>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>