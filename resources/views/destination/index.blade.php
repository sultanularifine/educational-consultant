<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Profile</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css"
        integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>

<body>
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
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('destination.create') }}">Data Entry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ route('destination.index') }}">Data list</a>
                </li>
                
            </ul>
        </div>
    </nav>
    <div>
        <div class="card">
            <div class="p-4">
                <div class="d-flex  mb-4">
                    <h4>Data Table</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($destinations as $destination)
                            <tr>
                                <td>{{ $destination->category }}</td>
                                <td class="text-justify">
                                    {{ implode(' ', array_slice(explode(' ', $destination->country), 0, 29)) }}....
                                </td>
                                <td class="mt-2">
                                    <a href="{{ route('destination.edit', $destination->id) }}"><button type="button"
                                            class="bi bi-pencil-square btn btn-primary ms-2"></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                    <a class="page-link"
                        href="{{ $currentPage > 1 ? route('blog.profileShow', ['page' => $currentPage - 1]) : '#' }}"
                        aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $currentPage >= $totalPages ? 'disabled' : '' }}">
                    <a class="page-link"
                        href="{{ $currentPage < $totalPages ? route('blog.profileShow', ['page' => $currentPage + 1]) : '#' }}"
                        aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div><!-- end card -->
    </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
