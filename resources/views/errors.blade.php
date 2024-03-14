<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 error | Laradmin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    <!-- Google tag (gtag.js) -->
    @include('common.tagmanager')

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('static/images/favicon/favicon.ico') }}">

    <!-- Libs CSS -->
    <link href="{{ asset('static/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('static/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('static/css/theme.min.css') }}">
</head>

<body>
    <!-- Error page -->
    <main class="container min-vh-100 d-flex justify-content-center
      align-items-center">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <!-- content -->
                <div class="text-center">
                    <div class="mb-3">
                        <!-- img -->
                        <img src="{{ asset('static/images/error/404-error-img.png') }}" alt="Image"
                            class="img-fluid">
                    </div>
                    <!-- text -->
                    <h1 class="display-4 ">Oops! the page not found.</h1>
                    <p class="mb-4">
                        Or simply leverage the expertise of our consultation team.
                    </p>
                    <!-- button -->
                    <a href="{{ url() }}" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Libs JS -->
    <script src="{{ asset('static/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('static/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('static/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('static/js/theme.min.js') }}"></script>
</body>

</html>
