<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog CMS</title>
    <!-- Bootstrap CSS link (replace with the appropriate version you want to use) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Blog CMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="{{ route('blog.index') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Categories & Tags</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('blog.loginForm') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('blog.register') }}">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Welcome to Blog CMS</h1>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
