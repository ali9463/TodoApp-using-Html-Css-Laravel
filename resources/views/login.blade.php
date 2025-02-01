<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="Images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="Images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="Images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="Images/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="Images/favicon/site.webmanifest" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <title>Listify</title>
</head>

<body>
    <nav
        id="navbar"
        class="navbar navbar-expand-lg navbar-light border-bottom sticky-top"
        style="background-color: #ffffff">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img
                    src="Images/logo.jpg"
                    alt="Logo"
                    class="d-inline-block align-text-top"
                    style="width: 30px; height: 30px" />
                <span>Listify</span>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center min-vh-80 py-5">
        <div class="row justify-content-center w-100">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('signin') }}" method="POST" class="col-12 col-md-6 col-lg-4 shadow-lg p-5 rounded bg-secondary">
                @csrf
                <h2 class="mb-4 text-center text-warning">Login In</h2>
                <div class="d-flex justify-content-center mb-3 gap-3">
                    <div class="icon p-2 border rounded-circle">
                        <i class="bx bxl-google-plus"></i>
                    </div>
                    <div class="icon p-2 border rounded-circle">
                        <i class="bx bxl-facebook"></i>
                    </div>
                    <div class="icon p-2 border rounded-circle">
                        <i class="bx bxl-github"></i>
                    </div>
                    <div class="icon p-2 border rounded-circle">
                        <i class="bx bxl-linkedin"></i>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" required />
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn2 w-100">Login In</button>
                </div>
                <a href="{{ route('signup') }}" class="text-decoration-none text-white w-100">Register Yourself?</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
