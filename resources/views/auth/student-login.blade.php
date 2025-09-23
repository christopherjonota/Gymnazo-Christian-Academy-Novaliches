<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <h2 class="mb-4">Student Login</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Login failed:</strong> {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('student.login.submit') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" id="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>
</html>